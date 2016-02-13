$(document).ready(function() {


    // page is now ready, initialize the calendar...
    $('#calendar').fullCalendar({
        header: {
            left:'prev,next today',
            center: 'title',
            right: ''
        },
        views: {
            month: {
                titleFormat: 'MMMM, YYYY'
            },
            agendaWeek: {
                titleFormat: 'DD MMMM, YYYY'
            }
        },
        defaultView: 'agendaWeek',
        columnFormat: 'ddd',
        editable: true,
        selectable: true,
        allDaySlot: false,
        firstDay: 1,
        aspectRatio: 1.6,
        select: function(start, end, jsEvent, view) {

            $('#appointment-timeslot-title')
                .text(moment(start).format('H:mma') + ' to ' + moment(end).format('H:mma'));

            $.magnificPopup.open({
                items: {
                    src: $('#appointment-popup'),
                    type: 'inline'
                }
            });
                var eventData;
                if (title) {
                    eventData = {
                        title: title,
                        start: start,
                        end: end
                    };
                $('#calendar').fullCalendar('renderEvent', eventData, true);
            }
            $('#calendar').fullCalendar('unselect');
        }
    });

});