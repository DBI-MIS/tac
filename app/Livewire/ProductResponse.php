<?php

namespace App\Livewire;

use App\Models\Response;
use Carbon\Carbon;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;

class ProductResponse extends Component implements HasForms
{
    use InteractsWithForms;
    
    public ?array $data = [];
    public ?string $date_response = '';
    // public ?string $product_id = '';
    public ?string $full_name = '';
    public ?string $contact_no = '';
    public ?string $email_address = '';
    public ?string $message = '';
    public $showModal = false;
    public $showSuccessMessage = '';
    public $product_id;
    protected $rules = [
        'full_name' => 'required|min:5',
        'contact_no' => 'required|min:11',
        'email_address' => 'required|email',
        'message' => 'required|min:20',
    ];

    protected $messages = [
        'full_name.required' => 'Please fill out with your full name.',
        'full_name.min' => 'Your name is too short.',
        'contact_no.required' => 'Please fill out with your contact number.',
        'contact_no.min' => 'Your contact number is invalid.',
        'message.required' => 'Please fill out with your message.',
        'massage.min' => 'Your message is invalid.',
        'email_address.required' => 'Please fill out with your email address.',
        'email_address.email' => 'Your email is invalid.',

    ];
    
    public function mount($product_id): void
    {
        $this->form->fill();
        $this->product_id = $product_id;
    }
    
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('full_name')
                    ->required()
                    ->minLength(5),
                    TextInput::make('product_id')
                    ->default($this->product_id)
                    ->readOnly(),
                DatePicker::make('date_response')
                    ->required()
                    ->default(Carbon::now()->format('m-d-Y'))
                    ->format('F j, Y')
                    ->readOnly(),
                TextInput::make('contact_no')
                    ->minLength(11),
                TextInput::make('email_address')
                    ->required()
                    ->endsWith(['.com,.org,.ph'])
                    ->email(),
                Textarea::make('message')
                    ->required()
                    ->minLength(20),
                Toggle::make('review')
                    ->default(false)
                    ->hidden(),
                TextInput::make('status')
                    ->default('pending')
                    ->hidden(),
            ])
            // ->statePath('data')
            ->model(Response::class);
    }
    
    public function create(): void
    {
        $post = Response::create($this->form->getState());
        $this->form->model($post)->saveRelationships();
        $this->form->fill();
        $this->showSuccessMessage = true;
        $this->showModal = false;
        
    }

    public function render()
    {
        return view('livewire.product-response');
    }
}
