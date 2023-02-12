<form action="{{ route('to_do.update_to_do') }}" method="POST">
    @csrf
    @php
    $upCaseField = 'style="text-transform:uppercase;"';
    @endphp
    <input type="hidden" name="edit_id" value="">
    {{$task_id}}
    {{--Crypt::encryptString("3")--}}
    {{--Crypt::decryptString("3")--}}
    <div class="row mb-3">
        <label for="task" class="col-md-2 col-form-label text-md-end">{{ __('Task') }}<span class="text-danger">*</span></label>

        <div class="col-md-10">
            <input id="task" type="text" class="form-control @error('task') is-invalid @enderror {{ session('danger_message') ? "is-invalid" : "" }}" name="task" value="" autocomplete="task" autofocus {!! $upCaseField !!}>

            @error('task')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="task_description" class="col-md-2 col-form-label text-md-end">{{ __('Task Description') }}</label>

        <div class="col-md-10">
            <textarea id="task_description" class="form-control @error('task_description') is-invalid @enderror" name="task_description" {!! $upCaseField !!}></textarea>

            @error('task_description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <button type="button" class="btn btn-success float-end" data-toggle="modal" data-target="#editModal">
                <i class="fas fa-edit"></i> Update
            </button>

            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Update Task</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Are You Sure You Want To Update This Task?
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('home') }}?action=cancelled" class="btn btn-secondary">{{ __('No') }}</a>
                            <button type="submit" class="btn btn-success float-end">
                                <i class="fas fa-save"></i> {{ __('Save') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>