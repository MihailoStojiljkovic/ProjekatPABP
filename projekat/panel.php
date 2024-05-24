<?php
session_start();

if (!isset($_SESSION["priv"])) {
    die(header("Location: index.php?error=2"));
}

// Proverite da li su sesijske varijable postavljene
$ime = isset($_SESSION["ime"]) ? $_SESSION["ime"] : '';
$prezime = isset($_SESSION["prezime"]) ? $_SESSION["prezime"] : '';
$email = isset($_SESSION["email"]) ? $_SESSION["email"] : '';
$about = isset($_SESSION["about"]) ? $_SESSION["about"] : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="./css/style.css">
    <title>User panel</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <div class="card text-white bg-dark mb-3">
                    <h3 class="card-header">Hello <?php echo htmlspecialchars($ime); ?></h3>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($prezime); ?></h5>
                        <h6 class="card-subtitle text-muted"><?php echo htmlspecialchars($email); ?></h6>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?php echo htmlspecialchars($about); ?></p>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="./php/logout.php" class="btn btn-primary">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div id='calendar'></div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <a href="create_event.php" class="btn btn-success">Create New Event</a>
                
            </div>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventModalLabel">Event Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 id="eventTitle"></h5>
                <p id="eventDescription"></p>
                <p id="eventStart"></p>
                <p id="eventEnd"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" id="deleteEventBtn">Delete</button>
            </div>
        </div>
    </div>
</div>


    <style>
        body {
            background-color: grey;
        }

        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: 'fetch_events.php',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        editable: true,
        eventLimit: true,
        eventClick: function(info) {
            // Display event details in modal
            $('#eventTitle').text(info.event.title);
            $('#eventDescription').text(info.event.extendedProps.description);
            $('#eventStart').text(moment(info.event.start).format('MMMM Do YYYY, h:mm:ss a'));
            $('#eventEnd').text(moment(info.event.end).format('MMMM Do YYYY, h:mm:ss a'));
            $('#eventModal').modal('show');

            // Set the event ID to the delete button data attribute
            $('#deleteEventBtn').data('id', info.event.id);
        }
    });
    calendar.render();

    // Delete event
    $('#deleteEventBtn').click(function() {
        var eventId = $(this).data('id');
        if (confirm('Are you sure you want to delete this event?')) {
            $.ajax({
                url: 'delete_event.php',
                method: 'POST',
                data: { id: eventId },
                success: function(response) {
                    if (response === 'success') {
                        calendar.refetchEvents();
                        $('#eventModal').modal('hide');
                    } else {
                        alert('Error deleting event');
                    }
                }
            });
        }
    });
});

    </script>

</body>

</html>
