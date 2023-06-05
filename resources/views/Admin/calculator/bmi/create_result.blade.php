@extends(backpack_view('blank'))
@include('Admin.includes.cdn')
@section('content')
    <main class="main pt-2">
        <nav aria-label="breadcrumb" class="d-none d-lg-block">
            <ol class="breadcrumb bg-transparent p-0 justify-content-end">
                <li class="breadcrumb-item text-capitalize"><a href="/admin/dashboard">Admin</a></li>
                <li class="breadcrumb-item text-capitalize"><a href="/admin/bmi">BMI</a></li>
                <li class="breadcrumb-item text-capitalize"><a href="/admin/bmi/results">Result Details</a></li>
                <li class="breadcrumb-item text-capitalize active" aria-current="page">Create</li>
            </ol>
        </nav>

        <section class="container-fluid">
            <h2 class="ml-1">
                <span class="text-capitalize">Add New Details</span>






            </h2>
        </section>
        <div class="container-fluid animated fadeIn">
            <div class="row">
                <form action="{{url('/admin/bmi/store-result')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12 bold-labels">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body row">
                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                            bp-field-name="title" bp-field-type="text">
                                            <label>Result Title</label>

                                            <input type="text" name="result_title" value="" class="form-control"
                                                required>



                                        </div>
                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                            bp-field-name="content" bp-field-type="textarea">
                                            <label>Result Content</label>
                                            <textarea id="content" name="content" class="form-control" required></textarea>


                                        </div>
                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                            bp-field-name="title" bp-field-type="text">
                                            <label>Bmi From</label>

                                            <input type="text" name="bmi_from" value="" class="form-control"
                                                required>



                                        </div>
                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                            bp-field-name="title" bp-field-type="text">
                                            <label>Bmi To</label>

                                            <input type="text" name="bmi_to" value="" class="form-control"
                                                required>

                                        </div>

                                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                            bp-field-name="title" bp-field-type="text">
                                            <label>Select most read news</label>

                                            @foreach ($bmiNews as $item)
                                                <div class="form-check">
                                                    <input class="form-check-input" name="most_read[]" type="checkbox"
                                                        value="{{ $item->id }}">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        {{ $item->title }}
                                                    </label>
                                                </div>
                                            @endforeach


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="saveActions" class="form-group ml-3">

                            <input type="hidden" name="_save_action" value="save_and_back">
                            <div class="btn-group" role="group">

                                <button type="submit" class="btn btn-success">
                                    <span class="la la-save" role="presentation" aria-hidden="true"></span> &nbsp;
                                    <span data-value="save_and_back">Save and back</span>
                                </button>

                                <div class="btn-group" role="group">
                                    <button id="bpSaveButtonsGroup" type="button" class="btn btn-success dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                            class="caret"></span><span class="sr-only">▼</span></button>
                                    <div class="dropdown-menu" aria-labelledby="bpSaveButtonsGroup">
                                        <button type="button" class="dropdown-item" data-value="save_and_edit">Save and
                                            edit
                                            this item</button>
                                        <button type="button" class="dropdown-item" data-value="save_and_new">Save and
                                            new
                                            item</button>
                                        <button type="button" class="dropdown-item" data-value="save_and_preview">Save
                                            and
                                            preview</button>
                                    </div>
                                </div>

                            </div>

                            <a href="http://127.0.0.1:8000/admin/news" class="btn btn-default"><span
                                    class="la la-ban"></span> &nbsp;Cancel</a>

                        </div>

                </form>
            </div>
        </div>
    </main>


    @include('Admin.includes.scripts')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
