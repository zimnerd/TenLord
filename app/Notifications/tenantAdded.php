<?php

namespace App\Notifications;

use App\Property;
use App\Unit;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Tenant;
class tenantAdded extends Notification
{
    use Queueable;
    protected $tenant;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Tenant $tenant,Property $property, Unit $unit)
    {
        //
        $this->tenant = $tenant;
        $this->property = $property;
        $this->unit = $unit;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url =    route('properties.units.tenants.show', [$this->property->id, $this->unit->id,$this->tenant->id]);


        return (new MailMessage)
        
		 ->subject('New Tenant -  ' .$this->tenant->name)
                    ->line('Property Name : '.$this->property->name)
                     ->line('Unit Number :  '.$this->unit->unit_number)
                    ->action('View Tenant '.$this->tenant->name, $url)
                    ->line('Thank you for using TenLord!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
     $url =    route('properties.units.tenants.show', [$this->property->id, $this->unit->id,$this->tenant->id]);
         return [
        'tenant_id' => $this->tenant->id,
        'property_id' => $this->property->id,
        'unit_id' => $this->unit->id,
        'url'=>$url,
    ];
    }
}
