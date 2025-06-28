<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
     <h1> HI hallo</h1>
     @foreach ($jobs as $Job )
     <div>
        {{ $Job ['title'] }} : {{ $Job['Salary' ]}}
     </div>
     
     @endforeach
</div>
