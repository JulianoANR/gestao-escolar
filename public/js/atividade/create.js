$(document).ready(function (){})

// DataTables
                $('#curriculos_table').DataTable({
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json",
                    }
                });

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.get({
                        url: "{{ route('api.atividades.get-curriculos') }}",
                        success: function (data) {
                            console.log(data.curriculos);
                            let curriculos = data.curriculos;
                            let curriculos_table = $('#curriculos_table').DataTable();
                            curriculos_table.clear();
                            curriculos.forEach(curriculo => {
                                curriculos_table.row.add([
                                    curriculo.bimestre,
                                    curriculo.codigo,
                                    curriculo.descricao,
                                    curriculo.objeto_conhecimento,
                                    '<input type="checkbox" id="select-curriculo" class="select-curriculo checkbox" name="curriculos[]" value="'+curriculo.id+'">'
                                ]).draw();
                            });
                        }
                });
