

<h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Welcome to test page {{ $page }} </h1><br>


    
@if ($page <= $max)
    @for ($i = 0; $i < $page; $i++)

        <img src="https://picsum.photos/id/{{$i*20}}/200/300" alt="">
   
    @endfor


    
@else
    
    <h2 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Too many pages!</h2>

    
@endif


