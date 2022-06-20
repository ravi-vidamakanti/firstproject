<x-app-layout>
    <x-slot name="header" class="center">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>
    
    <!-- {{$employee}} -->
    @foreach ($employee as $employee)
    <h4 >Id : {{$employee['id']}}</h4>
    <h4>Name: {{$employee['name']}}</h4>
    <h4>Mail: {{$employee['mail']}}</h4>
    <h4>Mail: {{$employee['salary']}}</h4><br>

    <!-- <button type="submit" href= " "></button> -->
    <a href="/employee/{{{$employee['id']}}}/edit">Edit</a>
    <a href="/employee/{{{$employee['id']}}}">Show</a>
    <form action="/employee/{{$employee['id']}}" method="POST">
        @csrf
        @method('delete')
        <button type="submi" >Delete</button>
    </form>

    @endforeach
    

</x-app-layout> 