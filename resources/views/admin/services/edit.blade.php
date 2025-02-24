@extends('admin.master')

@section('title', __('keywords.edit_service'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">{{ __('keywords.edit_service') }}</h2>
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.services.update', ['service' => $service]) }}" method="post"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group ">
                                        <x-form-lable field="title"></x-form-lable>

                                        <input type="text" name="title" class="form-control"
                                            placeholder="{{ __('keywords.title') }}" value="{{ $service->title }}">
                                        <x-validation-error field="title"></x-validation-error>


                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group ">
                                        <x-form-lable field="icon"></x-form-lable>

                                        <input type="text" name="icon" class="form-control"
                                            placeholder="{{ __('keywords.icon') }}" value="{{ $service->icon }}">
                                        <x-validation-error field="icon"></x-validation-error>


                                    </div>

                                </div>
                                <div class="col-md-12">

                                    <div class="form-group mt-2">
                                        <x-form-lable field="description"></x-form-lable>

                                        <textarea name="description" class="form-control" placeholder="{{ __('keywords.description') }}"> {{ $service->description }}</textarea>
                                        <x-validation-error field="description"></x-validation-error>


                                    </div>

                                </div>
                            </div>
                            <x-submit-button></x-submit-button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
