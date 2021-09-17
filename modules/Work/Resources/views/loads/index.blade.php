@extends('layouts.admin')

@section('title', trans_choice('work::general.works_loads', 2))

@section('new_button')
    @can('create-common-items')
        <a href="{{ route('items.create') }}" class="btn btn-success btn-sm">{{ trans('general.add_new') }}</a>
        <a href="{{ route('import.create', ['common', 'items']) }}" class="btn btn-white btn-sm">{{ trans('import.import') }}</a>
    @endcan
    <a href="{{ route('items.export', request()->input()) }}" class="btn btn-white btn-sm">{{ trans('general.export') }}</a>
@endsection


@push('scripts_start')
    <script src="{{ asset('public/js/common/items.js?v=' . version('short')) }}"></script>
@endpush
