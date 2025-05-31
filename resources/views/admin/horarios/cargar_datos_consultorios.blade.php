<table style="font-size: 12px;" class="table table-striped table-hover table-sm table-bordered">
    <thead>
        <tr>
            <th>Hora</th>
            <th>Lun</th>
            <th>Mar</th>
            <th>Mie</th>
            <th>Jue</th>
            <th>Vie</th>
            <th>Sab</th>
        </tr>
    </thead>
    <tbody>
        @php
        $horas = [
        '08:00:00 - 09:00:00',
        '09:00:00 - 10:00:00',
        '10:00:00 - 11:00:00',
        '11:00:00 - 12:00:00',
        '12:00:00 - 13:00:00',
        '13:00:00 - 14:00:00',
        '14:00:00 - 15:00:00',
        '15:00:00 - 16:00:00',
        '16:00:00 - 17:00:00',
        '17:00:00 - 18:00:00',
        '18:00:00 - 19:00:00',
        '19:00:00 - 20:00:00'
        ];
        // Usamos 7 días y según tu tabla, omito DOMINGO. Si deseas incluirlo, agrégalo al array.
        $diasSemana = [
        'LUNES',
        'MARTES',
        'MIERCOLES',
        'JUEVES',
        'VIERNES',
        'SABADO'
        ];
        @endphp

        @foreach ($horas as $hora)
        @php
        list($hora_inicio, $hora_fin) = explode(' - ', $hora);
        @endphp
        <tr>
            <td>{{ $hora }}</td>
            @foreach ($diasSemana as $dia)
            @php
            // Inicializamos un arreglo para acumular los nombres de doctores
            $nombres_doctores = [];
            foreach($horarios as $horario) {
            if (
            strtoupper($horario->dia) == $dia &&
            $hora_inicio >= $horario->hora_inicio &&
            $hora_fin <= $horario->hora_fin
                ) {
                // Acumula el nombre del doctor, si está disponible
                $nombres_doctores[] = $horario->doctor->nombres;
                }
                }
                // Evitamos nombres duplicados
                $nombres_doctores = array_unique($nombres_doctores);
                // Concatenamos todos los nombres usando "/" como separador
                $nombre_doctor = count($nombres_doctores) ? implode(' / ', $nombres_doctores) : '';
                @endphp
                <td>{{ $nombre_doctor }}</td>
                @endforeach
        </tr>
        @endforeach
    </tbody>
</table>