@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-bar-chart-o fa-1x"></i> Edit Project</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <form role="form" method="POST" action="{{route('projects.update', $project->id)}}">
            {{ csrf_field() }}
             {{ method_field('PATCH') }}
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Project name</label>
                        <input class="form-control" type="text" name="project_name" id="project_name" value="{{ $project->project_name }}" required>
                    </div>
                    <div class="form-group">
                        <label>Start date</label>
                        <input class="form-control" type="text" name="started_at" id="datepicker" value="{{ $project->started_at }}" required>
                    </div>
                    <div class="form-group">
                        <label>End date</label>
                        <input class="form-control" type="text" name="ended_at" id="datepicker2" value="{{ $project->ended_at }}" required>
                    </div>
                    
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="project_status" id="project_status">
                            <option value="{{ $project->project_status }}">Current status : {{ $project->project_status }}</option>
                            <option value="hold">Hold</option>
                            <option value="active">Active</option>
                            <option value="closed">Close</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Budget -- Currency in US Dollar</label>
                        <input class="form-control" type="text" name="budget" id="budget" value="{{ $project->budget }}" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="4" name="project_description" id="project_description" required>{{ $project->project_description }}</textarea>
                    </div>
                    
                </div>

                <div class="col-lg-12">
                    @include('layouts.partials.errors')
                    <button type="submit" class="btn btn-primary">Validate</button>
                    <a href="{{ route('projects.index') }}" class="btn btn-danger">Cancel</a>
                    <hr>
                </div>   
            </div>
        </form>
    </div>
</div>

@endsection

@section('js')
    <!-- datepicker JS -->
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script>
      $(function() {
        $( "#datepicker" ).datepicker();
      });
      $(function() {
        $( "#datepicker2" ).datepicker();
      });
    </script>
    <!-- End datepicker JS -->
@endsection