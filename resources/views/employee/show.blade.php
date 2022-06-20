
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Showing employee details') }}
        </h2>
    </x-slot>
   
        <table border="2">
            <tr>
                <td>
                <label for ='idname'> Name </lable>
                </td>
                <td>
                <input type= 'text' name = 'name' value="{{$data['name']}}" id = 'idname'>
                </td>
            </tr>
            <tr>
                <td>
                <label for ='idmail'> Mail </lable>
                </td>
                <td>
                <input type= 'text' name = 'mail' value="{{$data['mail']}}" id = 'idmail'>
                </td>
            </tr>
            <tr>
                <td>
                <label for ='idsalary'> Salary </lable>
            </td>
            <td>
            <input type= 'text' name = 'salary' value="{{$data['salary']}}" id = 'idsalary'><br><br>
            </td>
            </tr>
            <tr>
                <td>
                <a href="/employee/">Back</a>
            </tr>
        </table>
    
  

</x-app-layout> 