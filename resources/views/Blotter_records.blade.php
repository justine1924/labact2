<x-app-layout>
    <x-blotterNewEntry />
    <x-BlotterNextfiled />
    <x-blotterNextfield2 />
    <x-blotterReportingPersoData />
    <x-blottersuspecData />
    <x-blotterChildrenLaw />
    <x-IncedentReTRansRe />
    <x-blotterVictimData />
    <x-blotterNarrativeOfIncident />
    <!-- <form id="form1" >
        <input type="text" name="name" >
        <input type="text" name="age">
        <button type="submit">submit</button>
    </form > -->

<div>
    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">New Blotter</button>
</div>

<table id="search-table">
    <thead>
        <tr>
            <th>
                <span class="flex items-center">
                    Blotter No:
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    Type of Incident
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    Blotter Status
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    Date And Time Reported
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    Date And Time of Incident
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    Place of Incident
                </span>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td data-modal-target="blotterSuspec" data-modal-toggle="blotterSuspec" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">1</td>
            <td data-modal-target="blotterSuspec" data-modal-toggle="blotterSuspec">Sample Data Only</td>
            <td data-modal-target="blotterSuspec" data-modal-toggle="blotterSuspec"> </td>
            <td data-modal-target="blotterSuspec" data-modal-toggle="blotterSuspec">09/03/2024 9pm</td>
            <td data-modal-target="blotterSuspec" data-modal-toggle="blotterSuspec">09/08/2024 9pm</td>
            <td data-modal-target="blotterSuspec" data-modal-toggle="blotterSuspec"></td>

        </tr>
        
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    
if (document.getElementById("search-table") && typeof simpleDatatables.DataTable !== 'undefined') {
    const dataTable = new simpleDatatables.DataTable("#search-table", {
        searchable: true,
        sortable: false
    });
}
function serializeForm(form) {
    const formData = new FormData(form);
    const data = {};
    formData.forEach((value, key) => {
        data[key] = value;
    });
    return data;
}


 $('#Newform1').submit(function(event) {
    event.preventDefault();
    var form = document.getElementById('Newform1');
    var formData = serializeForm(form);
    console.log(formData);
    $.ajax({
        url: '/addblotter',
        method: 'POST',
        data: formData,
        success: function(response) {
            console.log(response);
        }
    });
});

</script>
</x-app-layout>