@extends('admin.layouts.master')
@section('title')
    Valex - Edit Users
@endsection

@push('styles')
    <link href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css" rel="stylesheet">
@endpush

@section('contents')
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">User Management - Edit User</h5>
            <nav>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="javascript:void(0);"> Users <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                        </a> </li>
                    <li class="text-[12px]"> <a class="flex items-center text-textmuted" href="javascript:void(0);">Edit
                        </a> </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-6 text-defaultsize">
        <div class="xl:col-span-12 col-span-12">
            <div class="box">
                <div class="box-header flex justify-between">
                    <div class="box-title">
                        User Information
                    </div>
                    {{-- <div class="ti-btn-list">
                        <a type="button"
                            href= "{{ route('admin.users.create') }}"class="ti-btn ti-btn-primary ti-btn-wave me-[0.375rem]">
                            <i class="ri-add-line"></i> Add New
                        </a>
                    </div> --}}

                </div>
                <div class="box-body">

                    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name ="user_id" value ="{{ $user->id }}">
                        <div class="grid grid-cols-12 sm:gap-6">

                            <div class="xl:col-span-12 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <label for="input-label" class="form-label !font-normal">Full Name</label>
                                <input type="text" class="form-control " name ="name" value="{{ $user->name }}">
                            </div>

                            <div class="xl:col-span-12 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <label for="input-label" class="form-label !font-normal">Email</label>
                                <input type="email" class="form-control " name ="email" value="{{ $user->email }}">
                            </div>

                            <div class="xl:col-span-12 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <label for="input-label" class="form-label !font-normal">Password</label>
                                <input type="password" class="form-control " name ="password" value="{{ $user->password }}">
                            </div>
                        </div>

                        <div class="flex justify-end mt-6">
                            <button type="submit" class="ti-btn ti-btn-primary-full ti-btn-wave  me-[0.375rem]">
                                <i class="ri-chat-smile-line label-ti-btn-icon  me-2"></i>
                                Save
                                Changes</button>
                        </div>


                    </form>

                </div>



                <div class="box-footer hidden border-t-0">
                </div>
            </div>
        </div>
    </div>
@endsection
