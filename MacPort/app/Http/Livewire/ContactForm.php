<?php
namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component {
    public $name = '';
    public $email = '';
    public $message = '';

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function submitForm()
    {
        $this->validate();

        // Simulate sending an email. In a real app, you'd likely send an actual email.
        // Make sure to configure your mail driver in your .env file to use this.
        Mail::raw("Name: {$this->name}\nEmail: {$this->email}\nMessage: {$this->message}", function ($mail) {
            $mail->to('example@example.com')
                ->from($this->email, $this->name)
                ->subject('New Contact Form Submission');
        });

        // Optionally reset the form fields after submission
        $this->reset(['name', 'email', 'message']);

        // Provide feedback to the user
        session()->flash('message', 'Thank you for contacting us. We will be in touch soon.');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
?>
