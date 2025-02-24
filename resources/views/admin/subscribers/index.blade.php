@extends('admin.master')

@section('title', __('keywords.subscribers'))
@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                <h2 class="page-title">{{ __('keywords.subscribers') }}</h2>
                
            </div>
            <div class="card shadow">
                <div class="card-body">

                    <x-success-alert></x-success-alert>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>{{ __('keywords.email') }}</th>
                                <th width="15%">{{ __('keywords.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($subscribers) > 0)
                                @foreach ($subscribers as $key => $subscriber)
                                    <tr>
                                        <td>{{ $subscribers->firstItem() + $loop->index }}</td>
                                        <td>{{ $subscriber->name }}</td>
                                        <td>{{ $subscriber->email }}</td>
                                        <td>{{ $subscriber->subject }}</td>

                                        <td>
                                             <x-delete-button
                                                href="{{ route('admin.subscribers.destroy', ['subscriber' => $subscriber]) }}"
                                                id="{{ $subscriber->id }}"></x-delete-button>
                                        </td>




                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <x-empty-alert></x-empty-alert>
                            @endif
                        </tbody>
                    </table>
                    {{ $subscribers->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
        <script>
            function comfirmDelete(id) {
                if (confirm('Are you Sure You Want To Delete This Recorde ?')) {
                    document.getElementById('deleteForm-' + id).submit();
                }
            }
        </script>
    @endsection
