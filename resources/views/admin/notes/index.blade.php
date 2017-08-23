@extends('admin.layouts.admin')

@section('title', __('views.admin.notes.index.title'))

@section('content')
    <div class="row">
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>@sortablelink('title', __('views.admin.notes.index.table_title'))</th>
                <th width="70%">{{__('views.admin.notes.index.table_body')}}</th>
                <th>@sortablelink('archived', __('views.admin.notes.index.table_archived'))</th>
                <th>@sortablelink('created_at', __('views.admin.notes.index.table_created_at'))</th>
                <th>@sortablelink('updated_at', __('views.admin.notes.index.table_updated_at'))</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($notes as $note)
                <tr>
                    <td>{{ $note->title }}</td>
                    <td>{{ $note->body }}</td>
                    <td>
                        @if($note->archived)
                            <span class="label label-primary">{{ __('views.admin.notes.index.active') }}</span>
                        @else
                            <span class="label label-danger">{{ __('views.admin.notes.index.archived') }}</span>
                        @endif
                    </td>
                    <td>{{ $note->created_at }}</td>
                    <td>{{ $note->updated_at }}</td>
                    <td>
                        <!-- edit and detail button
                        <a class="btn btn-xs btn-primary" href="{{-- route('admin.notes.show', [$user->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.show') }}">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a class="btn btn-xs btn-info" href="{{ route('admin.notes.edit', [$user->id]) --}}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.edit') }}">
                            <i class="fa fa-pencil"></i>
                        </a>
                        -->

                        {{--@if(!$user->hasRole('administrator'))--}}
                        {{--<button class="btn btn-xs btn-danger user_destroy"--}}
                        {{--data-url="{{ route('admin.users.destroy', [$user->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">--}}
                        {{--<i class="fa fa-trash"></i>--}}
                        {{--</button>--}}
                        {{--@endif--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection