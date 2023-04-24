<?php

/**
 * SmsController
 */
class SmsController extends Controller
{
	public function sendSms($data)
	{
	    
	$this->validate($request, $this->validInputConditions);
        $newAppointment = new \App\Appointment;

        $newAppointment->name = $request->input('name');
        $newAppointment->phoneNumber = $request->input('phoneNumber');
        $newAppointment->timezoneOffset = $request->input('timezoneOffset');
        $newAppointment->when = $request->input('when');

        $notificationTime = Carbon::parse($request->input('when'))->subMinutes($request->delta);
        $newAppointment->notificationTime = $notificationTime;

        return $newAppointment;
        
    class AppointmentReminder
{
    /**
     * Construct a new AppointmentReminder
     *
     * @param Illuminate\Support\Collection $twilioClient The client to use to query the API
     */
    function __construct()
    {
        $this->appointments = \App\Appointment::appointmentsDue()->get();
        
       $twilioConfig =\Config::get('services.twilio');
        $accountSid = $twilioConfig['ACcfc818db7fa419a91f051f130bfaf044'];
        $authToken = $twilioConfig['2c7f6552d1b959c10c5d063db8ea1733'];
        $this->sendingNumber = $twilioConfig['+16579998723'];

        $this->twilioClient = new Client($accountSid, $authToken);
    }  
    }
   
 
}
}
    
    
    
    
	    

    