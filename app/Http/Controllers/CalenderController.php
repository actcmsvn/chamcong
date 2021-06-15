<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Event;
use Calendar;
  
class CalenderController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
  
        $events = [];
        $data = Event::all();
         if($data->count()){
            foreach ($data as $key => $value) {
              $events[] = Calendar::event(
                  $value->title,
                  true,
                  new \DateTime($value->start),
                  new \DateTime($value->end.' +1 day')
              );
            }
         }

        $calendar = Calendar::addEvents($events)
        ->setOptions([
              'locale' => 'vn',
              'firstDay' => 0,
              'displayEventTime' => true,
              'selectable' => true,
              'initialView' => 'dayGridMonth',
              'headerToolbar' => [
                  'end' => 'today prev,next dayGridMonth timeGridWeek timeGridDay'
              ]
          ]);
  
        return view('admin.fullcalender', compact('calendar'));
    }
 
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function ajax(Request $request)
    {
 
        switch ($request->type) {
           case 'add':
              $event = Event::create([
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'update':
              $event = Event::find($request->id)->update([
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'delete':
              $event = Event::find($request->id)->delete();
  
              return response()->json($event);
             break;
             
           default:
             # code...
             break;
        }
    }
}