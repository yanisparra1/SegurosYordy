<?php

use App\Filament\Resources\Seguros\Pages\EditSeguro;
use App\Models\ClaseVehiculo;
use App\Models\ColorVehiculo;
use App\Models\Contratante;
use App\Models\Garantia;
use App\Models\MarcaVehiculo;
use App\Models\ModeloVehiculo;
use App\Models\Seguro;
use App\Models\TipoVehiculo;
use App\Models\User;
use App\Models\UsoVehiculo;
use App\Models\Vehiculo;
use Filament\Actions\Testing\TestAction;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->actingAs(User::create(['name' => 'Admin', 'email' => 'admin@test.com', 'password' => 'password']));

    $this->contratante = Contratante::create([
        'nombre' => 'Juan',
        'apellido' => 'Perez',
        'cedula' => '12345678',
    ]);

    $this->vehiculo = Vehiculo::create([
        'clase_vehiculo_id' => ClaseVehiculo::create(['nombre' => 'Automovil'])->id,
        'tipo_vehiculo_id' => TipoVehiculo::create(['nombre' => 'Sedan'])->id,
        'marca_vehiculo_id' => MarcaVehiculo::create(['nombre' => 'Toyota'])->id,
        'modelo_vehiculo_id' => ModeloVehiculo::create(['nombre' => 'Corolla'])->id,
        'color_vehiculo_id' => ColorVehiculo::create(['nombre' => 'Blanco'])->id,
        'uso_vehiculo_id' => UsoVehiculo::create(['nombre' => 'Particular'])->id,
        'motor' => 'MOTOR-1',
        'anio' => 2020,
        'placas' => 'ABC123',
    ]);

    $this->seguro = Seguro::create([
        'contratante_id' => $this->contratante->id,
        'vehiculo_id' => $this->vehiculo->id,
        'garantia_id' => Garantia::create(['nombre' => 'Basica', 'total' => 100])->id,
        'fecha_creacion' => now(),
    ]);
});

it('edita el contratante desde el formulario del seguro', function () {
    Livewire::test(EditSeguro::class, ['record' => $this->seguro->getRouteKey()])
        ->callAction(
            TestAction::make('editOption')->schemaComponent('contratante_id'),
            // Misma cédula: no debe chocar con la regla unique de su propio registro
            data: ['nombre' => 'Pedro', 'telefono' => '0414-0000000'],
        )
        ->assertHasNoFormErrors();

    expect($this->contratante->fresh())
        ->nombre->toBe('Pedro')
        ->cedula->toBe('12345678')
        ->telefono->toBe('0414-0000000');
});

it('edita el vehiculo desde el formulario del seguro', function () {
    Livewire::test(EditSeguro::class, ['record' => $this->seguro->getRouteKey()])
        ->callAction(
            TestAction::make('editOption')->schemaComponent('vehiculo_id'),
            data: ['motor' => 'MOTOR-2', 'peso' => 1500],
        )
        ->assertHasNoFormErrors();

    expect($this->vehiculo->fresh())
        ->motor->toBe('MOTOR-2')
        ->placas->toBe('ABC123')
        ->and((float) $this->vehiculo->fresh()->peso)->toBe(1500.0);
});
