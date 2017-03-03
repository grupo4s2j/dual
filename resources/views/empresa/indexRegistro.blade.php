@extends('empresa.tabsRegistro')
@section('content')
    <section class="content">

        <div class="tab-content">
            
            <div id="home" class="tab-pane fade in active">
            	@include('empresa.dadesEmp')

            </div> 
			<div id="menu1" class="tab-pane fade in active">
                @include('empresa.dadesEmp')
            </div>
            <div id="menu2" class="tab-pane fade">
                @include('empresa.contacteEmp')
            </div>
         
        </div>
    </section>

@endsection