@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create A Discount</h1>
@stop

@section('content')
    <form action="{{ route('dashboard.discount.store') }}" method="POST">
      @csrf

      <div class="row">
        <x-adminlte-input name="code" label="Code" placeholder="placeholder"
            
            fgroup-class="col-md-6" />
      </div>
      

      <div class="row">
          <x-adminlte-input name="quantity" label="Quantity" placeholder="quantity"
          type="number" fgroup-class="col-md-6"  min=1 max=1000 >
              <x-slot name="appendSlot">
                <div class="input-group-text  bg-dark">
                    <i class="fas fa-hashtag"></i>
                </div>
            </x-slot>
          </x-adminlte-input>
      </div>

      <div class="row">
          <x-adminlte-input name="percentage" label="Discount value " placeholder="Discount value"
          type="number" fgroup-class="col-md-6"  min=10 max=90 >
              <x-slot name="appendSlot">
                <div class="input-group-text  bg-dark">
                    <i class="fas fa-percent"></i>
                </div>
            </x-slot>
          </x-adminlte-input>
      </div>
 
   
       
      <div class="row">
        <x-adminlte-input name="expiry_date" label="Expiry Date" type="datetime-local"
        min="{{ date('Y-m-d\TH:i') }}"  
        max="{{ date('Y-m-d\TH:i', strtotime('+1 year')) }}"

            fgroup-class="col-md-6" />
            

            
      </div>


    <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>

    </form>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')




@stop