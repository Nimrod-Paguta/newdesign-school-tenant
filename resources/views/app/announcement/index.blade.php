<x-user-layout>

<style>
    .my-custom-padding-top {
    padding-top: 20px; /* Adjust the value as needed */

    
}

.my-custom-padding-left {
    margin-left: 0px; /* Adjust the value as needed */
}
.marg{
    margin: 20px; 
}
.my-custom-height {
    height: 300px; /* Adjust the value as needed */
}


</style>


<div class="modal fade" id="studentmodal" tabindex="-1" role="dialog" aria-labelledby="studentmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studentmodalLabel">Add Announcement!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 700px;">
                <form action="{{ route('announcement.store') }}" method="POST">
                    @csrf

                    <div class="row">
                    <div class="col-md-15" >
                        <div class="form-group">
                            <label for="what">What:</label>
                            <input id="what" class="form-control" type="text" name="what" value="{{ old('what') }}" required autofocus autocomplete="off" style="height: 60px;"/>
                            <x-input-error :messages="$errors->get('what')" class="mt-2" />
                        </div>
                    </div>


                        <div class="col-md-4">
                           
                        </div>

                        <div class="col-md-15" >
                        <div class="form-group">
                            <label for="why">Why:</label>
                            <input id="why" class="form-control" type="text" name="why" value="{{ old('why') }}" required autofocus autocomplete="off" style="height: 60px;"/>
                                <x-input-error :messages="$errors->get('why')" class="mt-2" />
                            </div>
                        </div>


                        </div>

                       

                        <div class="col-md-15" >
                        <div class="form-group">
                            <label for="where">Where:</label>
                            <input id="where" class="form-control" type="text" name="where" value="{{ old('where') }}" required autofocus autocomplete="off" style="height: 60px;"/>
                                <x-input-error :messages="$errors->get('where')" class="mt-2" />
                            </div>
                        </div>


                        <div class="col-md-15" >
                        <div class="form-group">
                            <label for="when">When:</label>
                            <input id="when" class="form-control" type="text" name="when" value="{{ old('when') }}" required autofocus autocomplete="off" style="height: 60px;"/>
                                <x-input-error :messages="$errors->get('when')" class="mt-2" />
                            </div>
                        </div>


                        <div class="col-md-15" >
                        <div class="form-group">
                            <label for="who">Who:</label>
                            <input id="who" class="form-control" type="text" name="who" value="{{ old('who') }}" required autofocus autocomplete="off" style="height: 60px;"/>
                                <x-input-error :messages="$errors->get('who')" class="mt-2" />
                            </div>
                        </div>


                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="date">Date Created:</label>
                                <input id="date" class="form-control" type="date" name="date" value="{{ old('date') }}" required autofocus />
                                <x-input-error :messages="$errors->get('date')" class="mt-2" />
                            </div>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
</div>







<div class="marg">
<h3>Announcement!</h3>
@role('admin')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentmodal">
    Add Announcement
</button>
@endrole

<div class="row">
    @foreach($announcements as $announcement)
    <div class="col-sm-4 my-custom-padding-top my-custom-padding-left">
        <div class="card my-custom-height">
            <div class="card-body my-custom-height">
                <h5 class="card-title">What: {{ $announcement->what }}</h5>
                <h5 class="card-title">Why: {{ $announcement->why }}</h5>
                <h5 class="card-title">Who: {{ $announcement->who }}</h5>
                <h5 class="card-title">When: {{ $announcement->when }}</h5>
                <h5 class="card-title">Where: {{ $announcement->where }}</h5>
                <h5 class="card-title">Date: {{ $announcement->date }}</h5>
                <a class="ahhh"  href="{{ route('announcement.edit', ['id' => $announcement->id]) }}"><button type="submit" class="btn btn-warning actions-buttons">Edit</button></a>
                
                <form action="{{ route('announcement.destroy', $announcement->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger actions-buttons">Delete</button>
</form>
            </div>
        </div>
    </div>
    @endforeach
</div>

















    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!-- Include Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Include DataTables JS -->
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    <!-- Include DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">

    <script>
        $(document).ready(function() {
            $('#yourDataTableID').DataTable();
        });
    </script>



</x-user-layout>
