@extends('admin.layouts.app')
@section('title')
    Dashboard
@endsection

@section('content')

<div class="content">

    {{-- Start Content--}}
    <div class="container-fluid">

        {{-- start page title --}}
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">@yield('title')</h4>
                </div>
            </div>
        </div>
        {{-- end page title --}}

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                    <i class="fe-users font-22 avatar-title text-primary"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ $totalMember }}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Member</p>
                                </div>
                            </div>
                        </div> {{-- end row--}}
                    </div>
                </div> {{-- end widget-rounded-circle--}}
            </div> {{-- end col--}}

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                    <i class="fe-file-text font-22 avatar-title text-success"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ $totalScript }}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Naskah</p>
                                </div>
                            </div>
                        </div> {{-- end row--}}
                    </div>
                </div> {{-- end widget-rounded-circle--}}
            </div> {{-- end col--}}

        </div>

    </div> {{-- container --}}

</div> {{-- content --}}

@endsection
