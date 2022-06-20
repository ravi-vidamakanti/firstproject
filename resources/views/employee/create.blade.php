
 
 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new employee') }}
        </h2>
    </x-slot>
    <form method="POST" action="/employee">
        @csrf
        <table border="2">
            <tr>
                <td>
                <label for ='idname'> Name </lable>
                </td>
                <td>
                <input type= 'text' name = 'name' id = 'idname'>
                </td>
            </tr>
            <tr>
                <td>
                <label for ='idmail'> Mail </lable>
                </td>
                <td>
                <input type= 'text' name = 'mail' id = 'idmail'>
                </td>
            </tr>
            <tr>
                <td>
                <label for ='idsalary'> Salary </lable>
            </td>
            <td>
            <input type= 'text' name = 'salary' id = 'idsalary'><br><br>
            </td>
            </tr>
            <tr>
                <td>
            <button type = "submitt" >Submitt <button></td>
            </tr>
        </table>
    
    </form>

</x-app-layout> 