@extends('layouts.auth')

@section('main')
    <!-- Page -->
    <style>
        .page-bg {
            background-image: url('assets/media/images/2600x1200/bg-10.png');
        }

        .dark .page-bg {
            background-image: url('assets/media/images/2600x1200/bg-10-dark.png');
        }
    </style>
    <div class="flex items-center justify-center grow bg-center bg-no-repeat page-bg">
        <div class="card max-w-[370px] w-full">
            <form action="#" class="card-body flex flex-col gap-5 p-10" id="sign_in_form" method="get">
                <div class="flex items-center justify-center gap-2">
                    <img src="{{ asset('assets/media/brand-logos/i3s-logo.png') }}" class="w-48">

                </div>
                <div class="text-center mb-2.5">
                    <h3 class="text-lg font-medium text-gray-900 leading-none mb-2.5">
                        PORTAL BERSEPADU SEKOLAH SISTEM PENGURUSAN MURID

                    </h3>
                    {{-- <div class="flex items-center justify-center font-medium">
                        <span class="text-2sm text-gray-700 me-1.5">
                            Need an account?
                        </span>
                        <a class="text-2sm link" href="html/demo1/authentication/classic/sign-up.html">
                            Sign up
                        </a>
                    </div> --}}
                </div>

                {{-- <div class="flex items-center gap-2">
                    <span class="border-t border-gray-200 w-full">
                    </span>
                    <span class="text-2xs text-gray-500 font-medium uppercase">
                        Or
                    </span>
                    <span class="border-t border-gray-200 w-full">
                    </span>
                </div> --}}
                <div class="flex flex-col gap-1">
                    <label class="form-label font-normal text-gray-900">
                        Email
                    </label>
                    <input class="input" placeholder="email@email.com" type="text" value="" />
                </div>
                <div class="flex flex-col gap-1">
                    <div class="flex items-center justify-between gap-1">
                        <label class="form-label font-normal text-gray-900">
                            Password
                        </label>
                        <a class="text-2sm link shrink-0" href="#">
                            Forgot Password?
                        </a>
                    </div>
                    <div class="input" data-toggle-password="true">
                        <input name="user_password" placeholder="Enter Password" type="password" value="" />
                        <button class="btn btn-icon" data-toggle-password-trigger="true" type="button">
                            <i class="ki-filled ki-eye text-gray-500 toggle-password-active:hidden">
                            </i>
                            <i class="ki-filled ki-eye-slash text-gray-500 hidden toggle-password-active:block">
                            </i>
                        </button>
                    </div>
                </div>
                <label class="checkbox-group">
                    <input class="checkbox checkbox-sm" name="check" type="checkbox" value="1" />
                    <span class="checkbox-label">
                        Remember me
                    </span>
                </label>
                <a href="{{ route('dashboard') }}" class="btn btn-primary flex justify-center grow">
                    Sign In
                </a>
                {{-- <button class="btn btn-primary flex justify-center grow">
      Sign In
     </button> --}}
            </form>
        </div>
    </div>
    <!-- End of Page -->
@endsection
