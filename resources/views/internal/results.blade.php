@extends('layout')
@section('title', 'Travelogue Tours| Results')

@include('internal.nav2')

@section('body')

    @foreach ($packages as $package)

        <div class="testimonials agile-section" id="testimonials" >

                <div class="shortcode_title shortcode-title-style_1"><h3 class="title_primary">{{$package -> first_name}} {{$package->last_name}}</h3><span class="line_after_title"></span></div>
                    <ul style="text-align: center; font-size:20px; ">
                         Location: {{$package->location}}<br>
                        Vehicle: {{$package->vehicle}}<br>
                         Arrival date: {{$package->arrival}}<br>
                         Dparture: {{$package->departure}}<br>
                    </ul>


        </div>

    @endforeach
    @endsection
