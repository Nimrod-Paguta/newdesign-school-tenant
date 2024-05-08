<x-user-layout>
    <form method="POST" action="{{ route('announcement.update', $announcement->id) }}">
        @csrf
        @method('put') 

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="what">What:</label>
                    <input id="what" class="form-control" type="text" name="what" value="{{ $announcement->what }}" required autofocus autocomplete="off" style="height: 60px;"/>
                    <x-input-error :messages="$errors->get('what')" class="mt-2" />
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="why">Why:</label>
                    <input id="why" class="form-control" type="text" name="why" value="{{ $announcement->why }}" required autofocus autocomplete="off" style="height: 60px;"/>
                    <x-input-error :messages="$errors->get('why')" class="mt-2" />
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="where">Where:</label>
                    <input id="where" class="form-control" type="text" name="where" value="{{ $announcement->where }}" required autofocus autocomplete="off" style="height: 60px;"/>
                    <x-input-error :messages="$errors->get('where')" class="mt-2" />
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="when">When:</label>
                    <input id="when" class="form-control" type="text" name="when" value="{{ $announcement->when }}" required autofocus autocomplete="off" style="height: 60px;"/>
                    <x-input-error :messages="$errors->get('when')" class="mt-2" />
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="who">Who:</label>
                    <input id="who" class="form-control" type="text" name="who" value="{{ $announcement->who }}" required autofocus autocomplete="off" style="height: 60px;"/>
                    <x-input-error :messages="$errors->get('who')" class="mt-2" />
                </div>
            </div>

            <div class="col-md-5">
                <div class="form-group">
                    <label for="date">Date Created:</label>
                    <input id="date" class="form-control" type="date" name="date" value="{{ $announcement->when }}" required autofocus />
                    <x-input-error :messages="$errors->get('date')" class="mt-2" />
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="announcement" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </form>

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
</x-user-layout>
