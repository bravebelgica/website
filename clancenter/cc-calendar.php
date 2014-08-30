                <h4 class="page-title">CALENDAR</h4>
                
                <div class="block-area">
                    <div class="alert alert-info alert-dismissable fade in">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Click on a Day to add an Event.
                    </div>
                </div>
                
                <div class="col-md-8 clearfix">
                    
                    <div id="calendar" class="p-relative p-10 m-b-20">
                        <!-- Calendar Views -->
                        <ul class="calendar-actions list-inline clearfix">
                            <li class="p-r-0">
                                <a data-view="month" href="#" class="tooltips" title="Month">
                                    <i class="sa-list-month"></i>
                                </a>
                            </li>
                            <li class="p-r-0">
                                <a data-view="agendaWeek" href="#" class="tooltips" title="Week">
                                    <i class="sa-list-week"></i>
                                </a>
                            </li>
                            <li class="p-r-0">
                                <a data-view="agendaDay" href="#" class="tooltips" title="Day">
                                    <i class="sa-list-day"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <h4 class="m-l-5">Upcoming Events</h4>
                    <div class="listview narrow">
                        <div class="media p-l-5">
                            <div class="pull-left">
                                <img width="40" src="img/profile-pics/1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <small class="text-muted">Today at 5:30 PM</small><br>
                                <a class="t-overflow" href="">Cras molestie fermentum nibh, ac semper</a>
                            </div>
                        </div>
                        <div class="media p-l-5">
                            <div class="media-body">
                                <small class="text-muted">Tomorrow at 8:56 PM</small><br>
                                <a class="t-overflow" href="">Suspendisse in purus ut nibh placerat</a>
                            </div>
                        </div>
                        <div class="media p-l-5">
                            <div class="media-body">
                                <small class="text-muted">13/05/2014 at 7:45 AM</small><br>
                                <a class="t-overflow" href="">Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                            </div>
                        </div>
                        <div class="media p-l-5">
                            <div class="pull-left">
                                <img width="40" src="img/profile-pics/2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <small class="text-muted">15/05/2014 at 10:23 AM</small><br>
                                <a class="t-overflow" href="">Integer a eros dapibus, vehicula quam accumsan, tincidunt purus</a>
                            </div>
                        </div>
                        <div class="media p-l-5">
                            <div class="pull-left">
                                <img width="40" src="img/profile-pics/3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <small class="text-muted">15/05/2014 at 11:50 AM</small><br>
                                <a class="t-overflow" href="">Vehicula regquam accumsan, tincidunt purus</a>
                            </div>
                        </div>
                        <div class="media p-l-5">
                            <div class="media-body">
                                <small class="text-muted">16/05/2014 at 2:40 PM</small><br>
                                <a class="t-overflow" href="">Lim sutson seruspendisse in purus ut nibh wood</a>
                            </div>
                        </div>
                        <div class="media p-l-5">
                            <div class="media-body">
                                <small class="text-muted">17/05/2014 at 5:23 AM</small><br>
                                <a class="t-overflow" href="">Palwin pulvinar euismod nunc quis gravida. Pharetra</a>
                            </div>
                        </div>
                        <div class="media p-l-5">
                            <div class="media-body">
                                <small class="text-muted">19/05/2014 at 7:23 PM</small><br>
                                <a class="t-overflow" href="">Arena soon be cook loas nunc eisumes wentro bin</a>
                            </div>
                        </div>
                        <div class="media p-l-5">
                            <div class="pull-left">
                                <img width="40" src="img/profile-pics/5.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <small class="text-muted">21/05/2014 at 10:10 AM</small><br>
                                <a class="t-overflow" href="">Lorem regquam accumsan, tincidunt ipsum persit</a>
                            </div>
                        </div>
                        <div class="media p-l-5">
                            <div class="media-body">
                                <small class="text-muted">23/05/2014 at 12:50 PM</small><br>
                                <a class="t-overflow" href="">Winsoo gravity for twelve eharetra and lorem ipsum</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add event -->
                <div class="modal fade" id="addNew-event">
                     <div class="modal-dialog">
                          <div class="modal-content">
                               <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Add an Event</h4>
                               </div>
                               <div class="modal-body">
                                    <form class="form-validation" role="form">
                                         <div class="form-group">
                                              <label for="eventName">Event Name</label>
                                              <input type="text" class="input-sm form-control validate[required]" id="eventName" placeholder="...">
                                         </div>
                                         
                                         <input type="hidden" id="getStart" />
                                         <input type="hidden" id="getEnd" />
                                    </form>
                               </div>
                               
                               <div class="modal-footer">
                                    <input type="submit" class="btn btn-info btn-sm" id="addEvent" value="Add Event">
                                    <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Close</button>
                               </div>
                          </div>
                     </div>
                </div>
                
                <!-- Modal Resize alert -->
                <div class="modal fade" id="editEvent">
                     <div class="modal-dialog">
                          <div class="modal-content">
                               <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Edit Event</h4>
                               </div>
                               <div class="modal-body">
                                    <div id="eventInfo"></div>
                               </div>
                               
                               <div class="modal-footer">
                                    <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Okay</button>
                                    <button type="button" class="btn btn-info btn-sm" id="editCancel" data-dismiss="modal">Cancel</button>
                               </div>
                          </div>
                     </div>
                </div>
                
                <br/><br/>
            </section>
        </section>
        
        <!-- Javascript Libraries -->
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script> <!-- jQuery Library -->
        <script src="js/jquery-ui.min.js"></script> <!-- jQuery UI -->

        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        
        <!-- UX -->
        <script src="js/scroll.min.js"></script> <!-- Custom Scrollbar -->
        
        <!--  Form Related -->
        <script src="js/validation/validate.min.js"></script> <!-- jQuery Form Validation Library -->
        <script src="js/validation/validationEngine.min.js"></script> <!-- jQuery Form Validation Library - requirred with above js -->
        
        <!-- Other -->
        <script src="js/calendar.min.js"></script> <!-- Calendar -->
        <script src="js/feeds.min.js"></script> <!-- News Feeds -->
        
        
        <!-- All JS functions -->
        <script src="js/functions.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();
                $('#calendar').fullCalendar({
                    header: {
                         center: 'title',
                         left: 'prev, next',
                         right: ''
                    },

                    selectable: true,
                    selectHelper: true,
                    editable: true,
                    events: [
                        {
                            title: 'Hangout with friends',
                            start: new Date(y, m, 1),
                            end: new Date(y, m, 2)
                        },
                        {
                            title: 'Meeting with client',
                            start: new Date(y, m, 10),
                            allDay: true
                        },
                        {
                            title: 'Repeat Event',
                            start: new Date(y, m, 18),
                            allDay: true
                        },
                        {
                            title: 'Semester Exam',
                            start: new Date(y, m, 20),
                            end: new Date(y, m, 23)
                        },
                        {
                            title: 'Soccor match',
                            start: new Date(y, m, 5),
                            end: new Date(y, m, 6)
                        },
                        {
                            title: 'Coffee time',
                            start: new Date(y, m, 21),
                        },
                        {
                            title: 'Job Interview',
                            start: new Date(y, m, 5),
                        }
                    ],
                     
                    //On Day Select
                    select: function(start, end, allDay) {
                        $('#addNew-event').modal('show');   
                        $('#addNew-event input:text').val('');
                        $('#getStart').val(start);
                        $('#getEnd').val(end);
                    },
                     
                    eventResize: function(event,dayDelta,minuteDelta,revertFunc) {
                        $('#editEvent').modal('show');

                        var info =
                            "The end date of " + event.title + "has been moved " +
                            dayDelta + " days and " +
                            minuteDelta + " minutes."
                        ;
                        
                        $('#eventInfo').html(info);
                
                
                        $('#editEvent #editCancel').click(function(){
                             revertFunc();
                        }) 
                    }
                });
                
                $('body').on('click', '#addEvent', function(){
                     var eventForm =  $(this).closest('.modal').find('.form-validation');
                     eventForm.validationEngine('validate');
                     
                     if (!(eventForm).find('.formErrorContent')[0]) {
                          
                          //Event Name
                          var eventName = $('#eventName').val();

                          //Render Event
                          $('#calendar').fullCalendar('renderEvent',{
                               title: eventName,
                               start: $('#getStart').val(),
                               end:  $('#getEnd').val(),
                               allDay: true,
                          },true ); //Stick the event
                          
                          $('#addNew-event form')[0].reset()
                          $('#addNew-event').modal('hide');
                     } 
                });   
            });    
            
            //Calendar views
            $('body').on('click', '.calendar-actions > li > a', function(e){
                e.preventDefault();
                var dataView = $(this).attr('data-view');
                $('#calendar').fullCalendar('changeView', dataView);
                
                //Custom scrollbar
                var overflowRegular, overflowInvisible = false;
                overflowRegular = $('.overflow').niceScroll();     
            });                    
            
       </script>

