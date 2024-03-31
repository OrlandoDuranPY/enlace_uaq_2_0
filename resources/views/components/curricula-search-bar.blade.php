<form class="flex gap-5 ml-0.5">
    <input type="text"
        class="w-4/6 focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
        placeholder="Buscar...">
    {{-- Filtro de alumnos, egresadod o docentes --}}
    <select
        class="w-1/6 focus:ring-2 focus:ring-enlace-green focus:border-enlace-green border-none rounded-lg bg-enlace-gray text-enlace-dark-gray">
        <option>-- Todos --</option>
        <option>Estudiantes</option>
        <option>Egresados</option>
        <option>Docentes</option>
    </select>
    {{-- Submit --}}
    <button class="w-1/6 bg-enlace-red py-2 px-5 rounded-lg text-white uppercase font-semibold"
        type="submit">Buscar</button>
</form>
