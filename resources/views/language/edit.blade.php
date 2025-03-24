{{--@extends('layouts.master')--}}
@extends('layouts.user_type.auth')

@section('extra_css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">
<style type="text/css">
.select2-container {
    display: block;
}
</style>
@endsection

@section('content')
    {!! Form::open(['route' =>['language.update',$language->id],'method'=>'PATCH','files'=>true]) !!}
    {!! Form::hidden('user_id',Auth::user()->id)!!}
    {!! Form::hidden('id',$language->id)!!}
    <div class="row mt-5">
        <div class="col-12">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Update Language</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                {!! Form::label('name','Name', ['class' => 'col-sm-3 col-form-label']) !!}
                                <div class="col-sm-4">
                                    {!! Form::text('name', $language->name,['class' => 'form-control','required','placeholder'=>'Enter Name']) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row reward-duration">
                        <div class="col-12">
                            <div class="form-group row">
                                <div class='col-sm-3 col-form-label'>Direction</div>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="col-6">
                                            <select id="direction" name="direction" class="form-control">
                                                <option value="LTR" <?php echo ($language->direction == "LTR") ? "selected" : ""; ?>>LTR (Left-to-Right)</option>
                                                <option value="RTL" <?php echo ($language->direction == "RTL") ? "selected" : ""; ?>>RTL (Right-to-Left)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                {!! Form::label('word_json','Words in JSON', ['class' => 'col-sm-3 col-form-label']) !!}
                                <div class="col-sm-4">
                                    {!! Form::textarea('word_json',$language->word_json,['class' => 'form-control',"rows"=>10,'required']) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 m-3 text-center">
            @if(Auth::user()->user_type == "Demo")
            <button type="button" class="btn btn-success ToastrButton">Update</button>
            @else
            {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
            @endif
        </div>
    </div>
    {!! Form::close() !!}
@endsection

@section("script")
<script type="text/javascript">
    $(document).ready(function() {
        $('#duration_type').select2();

        $('#google_product_enable').change(function(){
            if($(this).is(':checked'))
            {
                $(".google-product").css("display","block");
                $("#google_product_id").prop('required',true);
            }
            else
            {
                $(".google-product").css("display","none");
                $("#google_product_id").prop('required',false);
            }
        });

        $('#rewarded_enable').change(function(){
            if($(this).is(':checked'))
            {
                $(".reward-duration").css("display","block");
                $("#duration").prop('required',true);
                $("#duration_type").prop('required',true);
            }
            else
            {
                $(".reward-duration").css("display","none");
                $("#duration").prop('required',false);
                $("#duration_type").prop('required',false);
            }
        });
    });
</script>
@endsection