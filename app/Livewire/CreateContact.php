<?php
 
namespace App\Livewire;

use App\Mail\ContactMail;
use App\Models\Contact;
use App\Models\Post;
use Doctrine\DBAL\Schema\Table;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
 
class CreateContact extends Component implements HasForms
{
    use InteractsWithForms;
    
    public ?array $data = [];
       public $showSuccessMessage = '';
    public $showModal = false;

    
    public function mount(): void
    {
        $this->form->fill();
    }
    
    public function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('name')
            ->required()
            ->label('Name'),
            Group::make()
                ->schema([
                    Select::make('subject')
                    ->options([
                        'General Inquiry' => 'General Inquiry',
                        'Product Inquiry' => 'Product Inquiry',
                        'Concern/Issue' => 'Concern/Issue',
                        'Careers/Hiring' => 'Careers/Hiring',
                        'Feedback' => 'Feedback',
                    ])
                    ->required()
                    ->label('Subject'),
                TextInput::make('contact_no')
                    ->required()
                    ->tel()  
                    ->label('Contact Number'),
                ])->columns(2),
        
            TextInput::make('email')
                ->required()
                ->email()
                ->label('Email'),
            Textarea::make('message')
            ->minLength(25)
            ->label('Message or Feedback')
            ->rows(5),
            ])
                ->statePath('data');
    }

    public function toggleModal()
    {
        $this->showModal = !$this->showModal;
    }
    public function create(): void
    {
        $validatedData = $this->form->getState();

       $contact = Contact::create($validatedData);
        Notification::make()
        ->title('Contact Created')
        ->success()
        ->send();
        $this->showSuccessMessage = true;
        Mail::to('misggc@gmail.com')->send(new ContactMail($contact));
      
    $this->form->fill();
    $this->showModal = false;
    }

 
    
    public function render(): View
    {
        return view('livewire.create-contact');
    
    }
}
