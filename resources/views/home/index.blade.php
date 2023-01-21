@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div id="wrapper">
    @include('includes.menu_lateral')

    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            @include('includes.menu_superior')
        </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="footer">
                    <div>
                        <p>
                            Copyright &copy; <script>document.write(new Date().getFullYear());</script> made by <a href="https://www.linkedin.com/in/john-alexander-llarave-herr%C3%A1n-7a93b8156/" target="_blank"> Ing. John Llarave</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection