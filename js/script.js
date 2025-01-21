document.addEventListener('DOMContentLoaded', function () {
    fetch('php/get_data.php')
        .then(response => response.json())
        .then(data => {
            const usuarioSelect = document.getElementById('usuario');
            const tipoIncidenciaSelect = document.getElementById('tipo_incidencia');
            const departamentoSelect = document.getElementById('departamento');

            data.usuarios.forEach(usuario => {
                const option = document.createElement('option');
                option.value = usuario.id;
                option.textContent = usuario.nombre_usuario;
                usuarioSelect.appendChild(option);
            });

            data.tipos_incidencia.forEach(tipo => {
                const option = document.createElement('option');
                option.value = tipo.id;
                option.textContent = tipo.tipo;
                tipoIncidenciaSelect.appendChild(option);
            });

            data.departamentos.forEach(departamento => {
                const option = document.createElement('option');
                option.value = departamento.id;
                option.textContent = departamento.departamento;
                departamentoSelect.appendChild(option);
            });
        });

    fetch('php/get_incidencias.php')
        .then(response => response.json())
        .then(data => {
            const incidenciasTableBody = document.getElementById('incidenciasTable').querySelector('tbody');
            data.forEach(incidencia => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${incidencia.nombre_usuario}</td>
                    <td>${incidencia.tipo}</td>
                    <td>${incidencia.descripcion}</td>
                    <td>${incidencia.fecha_actual}</td>
                    <td>${incidencia.departamento}</td>
                `;
                incidenciasTableBody.appendChild(row);
            });
        });


    //dese aqui
    fetch('php/get_usuarios.php')
        .then(response => response.json())
        .then(data => {
            const usuariosTableBody = document.getElementById('usuariosTable').querySelector('tbody');
            data.forEach(usuario => {
                const row = document.createElement('tr');
                row.innerHTML = `
            <td>${usuario.id}</td>
            <td>${usuario.nombre_usuario}</td>
            
        `;
                usuariosTableBody.appendChild(row);
            });
        });
    //hasta aqui

});

