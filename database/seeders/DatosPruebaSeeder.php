<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proveedor;
use App\Models\Insumo;
use App\Models\Servicio;
use App\Models\Empleado;
use App\Models\Venta;
use App\Models\ServicioInsumo;

class DatosPruebaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creamos datos para la tabla de Proveedor
        if (Proveedor::count() == 0) {
            Proveedor::create([
                'nombre_Proveedor' => 'Proveedor 1',
                'apellido_Proveedor' => 'Apellido 1',
                'direccion_Proveedor' => 'Direccion 1',
                'telefono_Proveedor' => '63641278',
                'correo_Proveedor' => 'proveedor1@gmail.com',
            ]);

            Proveedor::create([
                'nombre_Proveedor' => 'Proveedor 2',
                'apellido_Proveedor' => 'Apellido 2',
                'direccion_Proveedor' => 'Direccion 2',
                'telefono_Proveedor' => '78965132',
                'correo_Proveedor' => 'proveedor2@gmail.com',
            ]);

            Proveedor::create([
                'nombre_Proveedor' => 'Proveedor 3',
                'apellido_Proveedor' => 'Apellido 3',
                'direccion_Proveedor' => 'Direccion 3',
                'telefono_Proveedor' => '73251463',
                'correo_Proveedor' => 'proveedor3@gmail.com',
            ]);

            Proveedor::create([
                'nombre_Proveedor' => 'Proveedor 4',
                'apellido_Proveedor' => 'Apellido 4',
                'direccion_Proveedor' => 'Direccion 4',
                'telefono_Proveedor' => '65123475',
                'correo_Proveedor' => 'proveedor4@gmail.com',
            ]);

            Proveedor::create([
                'nombre_Proveedor' => 'Proveedor 5',
                'apellido_Proveedor' => 'Apellido 5',
                'direccion_Proveedor' => 'Direccion 5',
                'telefono_Proveedor' => '75143265',
                'correo_Proveedor' => 'proveedor5@gmail.com',
            ]);

        }


        //Creamos datos para la tabla Insumo
        if (Insumo::count() == 0) {
            Insumo::create([
                'id_proveedors' => '1',
                'nombre_Insumo' => 'Insumo 1',
                'costo_Unitario_Insumo' => 35.00,
                
            ]);

            Insumo::create([
                'id_proveedors' => '1',
                'nombre_Insumo' => 'Insumo 2',
                'costo_Unitario_Insumo' => 40.00,
                
            ]);

            Insumo::create([
                'id_proveedors' => '2',
                'nombre_Insumo' => 'Insumo 3',
                'costo_Unitario_Insumo' => 65.00,
                
            ]);

            Insumo::create([
                'id_proveedors' => '2',
                'nombre_Insumo' => 'Insumo 4',
                'costo_Unitario_Insumo' => 95.50,
                
            ]);

            Insumo::create([
                'id_proveedors' => '3',
                'nombre_Insumo' => 'Insumo 5',
                'costo_Unitario_Insumo' => 15.00,
                
            ]);

            Insumo::create([
                'id_proveedors' => '3',
                'nombre_Insumo' => 'Insumo 6',
                'costo_Unitario_Insumo' => 100.00,
                
            ]);

            Insumo::create([
                'id_proveedors' => '4',
                'nombre_Insumo' => 'Insumo 7',
                'costo_Unitario_Insumo' => 75.10,
                
            ]);

            Insumo::create([
                'id_proveedors' => '4',
                'nombre_Insumo' => 'Insumo 8',
                'costo_Unitario_Insumo' => 65.90,
                
            ]);

            Insumo::create([
                'id_proveedors' => '5',
                'nombre_Insumo' => 'Insumo 9',
                'costo_Unitario_Insumo' => 20.50,
                
            ]);

            Insumo::create([
                'id_proveedors' => '5',
                'nombre_Insumo' => 'Insumo 10',
                'costo_Unitario_Insumo' => 98.30,
                
            ]);

        }

        //Creamos datos para la tabla de Servicio

        if (Servicio::count() == 0) {
            Servicio::create([
                'nombre_Servicio' => 'Servicio 1',
                'descripcion_Servicio' => 'Descripcion servicio 1',
                'costo_Servicio' => 20.50,
                'precio_Venta_Servicio' => 10.00,
                'tiempo_Entrega_Servicio' => 30,
            ]);

            Servicio::create([
                'nombre_Servicio' => 'Servicio 2',
                'descripcion_Servicio' => 'Descripcion servicio 2',
                'costo_Servicio' => 15.75,
                'precio_Venta_Servicio' => 30.65,
                'tiempo_Entrega_Servicio' => 20,
            ]);

            Servicio::create([
                'nombre_Servicio' => 'Servicio 3',
                'descripcion_Servicio' => 'Descripcion servicio 3',
                'costo_Servicio' => 32.65,
                'precio_Venta_Servicio' => 20.72,
                'tiempo_Entrega_Servicio' => 15,
            ]);

            Servicio::create([
                'nombre_Servicio' => 'Servicio 4',
                'descripcion_Servicio' => 'Descripcion servicio 4',
                'costo_Servicio' => 30.10,
                'precio_Venta_Servicio' => 24.40,
                'tiempo_Entrega_Servicio' => 25,
            ]);

            Servicio::create([
                'nombre_Servicio' => 'Servicio 5',
                'descripcion_Servicio' => 'Descripcion servicio 5',
                'costo_Servicio' => 17.35,
                'precio_Venta_Servicio' => 6.50,
                'tiempo_Entrega_Servicio' => 5,
            ]);

        }

        //Creamos datos para la tabla Empleado
        
        if (Empleado::count() == 0) {
            Empleado::create([
                'dui_Empleado'=>'06175983-1',
                'nombre_Empleado' => 'Nombre 1',
                'apellido_Empleado' => 'Apellido 1',
                'salario_Empleado' => 450.00,
                'contratacion_Empleado' => '2021/05/06',
            ]);

            Empleado::create([
                'dui_Empleado'=>'06087914-4',
                'nombre_Empleado' => 'Nombre 2',
                'apellido_Empleado' => 'Apellido 2',
                'salario_Empleado' => 650.00,
                'contratacion_Empleado' => '2021/04/16',
            ]);

            Empleado::create([
                'dui_Empleado'=>'03065416-4',
                'nombre_Empleado' => 'Nombre 3',
                'apellido_Empleado' => 'Apellido 3',
                'salario_Empleado' => 1000.00,
                'contratacion_Empleado' => '2021/10/08',
            ]);

            Empleado::create([
                'dui_Empleado'=>'04047984-5',
                'nombre_Empleado' => 'Nombre 4',
                'apellido_Empleado' => 'Apellido 4',
                'salario_Empleado' => 1250.00,
                'contratacion_Empleado' => '2020/01/10',
            ]);

            Empleado::create([
                'dui_Empleado'=>'07030973-0',
                'nombre_Empleado' => 'Nombre 5',
                'apellido_Empleado' => 'Apellido 5',
                'salario_Empleado' => 750.00,
                'contratacion_Empleado' => '2022/11/24',
            ]);
        }

        //Creamos datos para la tabla venta
        if (Venta::count() == 0) {
            
            //Empleado 1
            Venta::create([
                'id_servicios' => 1,
                'id_empleados' => 1,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 10,
                'neto_Venta' => 25.20,
                'iva_Venta' => 3.27,
                'total_Venta' => 28.47,
            ]);

            Venta::create([
                'id_servicios' => 2,
                'id_empleados' => 1,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 5,
                'neto_Venta' => 30.00,
                'iva_Venta' => 3.90,
                'total_Venta' => 33.90,
            ]);

            Venta::create([
                'id_servicios' => 3,
                'id_empleados' => 1,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 25,
                'neto_Venta' => 15.00,
                'iva_Venta' => 1.95,
                'total_Venta' => 16.95,
            ]);

            Venta::create([
                'id_servicios' => 4,
                'id_empleados' => 1,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 6,
                'neto_Venta' => 17.00,
                'iva_Venta' => 2.21,
                'total_Venta' => 19.21,
            ]);

            Venta::create([
                'id_servicios' => 5,
                'id_empleados' => 1,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 20,
                'neto_Venta' => 60.00,
                'iva_Venta' => 7.80,
                'total_Venta' => 67.80,
            ]);

            //Empleado 2
            Venta::create([
                'id_servicios' => 1,
                'id_empleados' => 2,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 20,
                'neto_Venta' => 28.00,
                'iva_Venta' => 3.64,
                'total_Venta' => 31.64,
            ]);

            Venta::create([
                'id_servicios' => 2,
                'id_empleados' => 2,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 5,
                'neto_Venta' => 30.00,
                'iva_Venta' => 3.90,
                'total_Venta' => 33.90,
            ]);

            Venta::create([
                'id_servicios' => 3,
                'id_empleados' => 2,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 17,
                'neto_Venta' => 36.75,
                'iva_Venta' => 4.77,
                'total_Venta' => 41.52,
            ]);

            Venta::create([
                'id_servicios' => 4,
                'id_empleados' => 2,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 20,
                'neto_Venta' => 55.00,
                'iva_Venta' => 7.15,
                'total_Venta' => 62.15,
            ]);

            Venta::create([
                'id_servicios' => 5,
                'id_empleados' => 2,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 20,
                'neto_Venta' => 60.00,
                'iva_Venta' => 7.80,
                'total_Venta' => 67.80,
            ]);


            //Empleado 3
            Venta::create([
                'id_servicios' => 1,
                'id_empleados' => 3,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 20,
                'neto_Venta' => 23.00,
                'iva_Venta' => 2.99,
                'total_Venta' => 25.99,
            ]);

            Venta::create([
                'id_servicios' => 2,
                'id_empleados' => 3,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 5,
                'neto_Venta' => 18.75,
                'iva_Venta' => 2.44,
                'total_Venta' => 21.19,
            ]);

            Venta::create([
                'id_servicios' => 3,
                'id_empleados' => 3,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 17,
                'neto_Venta' => 24.35,
                'iva_Venta' => 3.17,
                'total_Venta' => 27.52,
            ]);

            Venta::create([
                'id_servicios' => 4,
                'id_empleados' => 3,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 20,
                'neto_Venta' => 120.00,
                'iva_Venta' => 15.60,
                'total_Venta' => 135.60,
            ]);

            Venta::create([
                'id_servicios' => 5,
                'id_empleados' => 3,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 20,
                'neto_Venta' => 60.00,
                'iva_Venta' => 7.80,
                'total_Venta' => 67.80,
            ]);


            //Empleado 4
            Venta::create([
                'id_servicios' => 1,
                'id_empleados' => 4,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 20,
                'neto_Venta' => 23.00,
                'iva_Venta' => 2.99,
                'total_Venta' => 25.99,
            ]);

            Venta::create([
                'id_servicios' => 2,
                'id_empleados' => 4,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 5,
                'neto_Venta' => 18.75,
                'iva_Venta' => 2.44,
                'total_Venta' => 21.19,
            ]);

            Venta::create([
                'id_servicios' => 3,
                'id_empleados' => 4,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 17,
                'neto_Venta' => 24.35,
                'iva_Venta' => 3.17,
                'total_Venta' => 27.52,
            ]);

            Venta::create([
                'id_servicios' => 4,
                'id_empleados' => 4,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 20,
                'neto_Venta' => 120.00,
                'iva_Venta' => 15.60,
                'total_Venta' => 135.60,
            ]);

            Venta::create([
                'id_servicios' => 5,
                'id_empleados' => 4,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 20,
                'neto_Venta' => 60.00,
                'iva_Venta' => 7.80,
                'total_Venta' => 67.80,
            ]);

            //Empleado 5
            Venta::create([
                'id_servicios' => 1,
                'id_empleados' => 5,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 20,
                'neto_Venta' => 23.00,
                'iva_Venta' => 2.99,
                'total_Venta' => 25.99,
            ]);

            Venta::create([
                'id_servicios' => 2,
                'id_empleados' => 5,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 5,
                'neto_Venta' => 18.75,
                'iva_Venta' => 2.44,
                'total_Venta' => 21.19,
            ]);

            Venta::create([
                'id_servicios' => 3,
                'id_empleados' => 5,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 17,
                'neto_Venta' => 24.35,
                'iva_Venta' => 3.17,
                'total_Venta' => 27.52,
            ]);

            Venta::create([
                'id_servicios' => 4,
                'id_empleados' => 5,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 20,
                'neto_Venta' => 120.00,
                'iva_Venta' => 15.60,
                'total_Venta' => 135.60,
            ]);

            Venta::create([
                'id_servicios' => 5,
                'id_empleados' => 5,
                'fecha_Venta' => '2023/03/24',
                'cantidad_Venta' => 20,
                'neto_Venta' => 60.00,
                'iva_Venta' => 7.80,
                'total_Venta' => 67.80,
            ]);
        }

        //Datos tabla servicio insumo
        if (ServicioInsumo::count() == 0) {

            ServicioInsumo::create([
                'id_insumos' => 1,
                'id_proveedors' => 1,
                'id_servicios' => 1,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 1,
                'id_proveedors' => 2,
                'id_servicios' => 1,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 1,
                'id_proveedors' => 3,
                'id_servicios' => 1,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 1,
                'id_proveedors' => 4,
                'id_servicios' => 1,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 1,
                'id_proveedors' => 5,
                'id_servicios' => 1,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 2,
                'id_proveedors' => 1,
                'id_servicios' => 1,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 2,
                'id_proveedors' => 2,
                'id_servicios' => 2,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 2,
                'id_proveedors' => 3,
                'id_servicios' => 3,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 2,
                'id_proveedors' => 4,
                'id_servicios' => 2,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 2,
                'id_proveedors' => 5,
                'id_servicios' => 4,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 3,
                'id_proveedors' => 1,
                'id_servicios' => 2,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 3,
                'id_proveedors' => 2,
                'id_servicios' => 3,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 3,
                'id_proveedors' => 3,
                'id_servicios' => 5,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 3,
                'id_proveedors' => 4,
                'id_servicios' => 4,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 3,
                'id_proveedors' => 5,
                'id_servicios' => 3,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 4,
                'id_proveedors' => 1,
                'id_servicios' => 2,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 4,
                'id_proveedors' => 2,
                'id_servicios' => 1,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 4,
                'id_proveedors' => 3,
                'id_servicios' => 1,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 4,
                'id_proveedors' => 4,
                'id_servicios' => 3,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 4,
                'id_proveedors' => 5,
                'id_servicios' => 5,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 5,
                'id_proveedors' => 1,
                'id_servicios' => 2,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 5,
                'id_proveedors' => 2,
                'id_servicios' => 2,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 5,
                'id_proveedors' => 3,
                'id_servicios' => 1,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 5,
                'id_proveedors' => 4,
                'id_servicios' => 1,
            ]);

            ServicioInsumo::create([
                'id_insumos' => 5,
                'id_proveedors' => 5,
                'id_servicios' => 5,
            ]);

        }

    }
}
