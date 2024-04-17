<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudyProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        /* ========================================
        Licenciaturas
        ========================================= */
        DB::table('study_programs')->insert([
            'name' => 'Ingeniero en Biotecnología - Plan 2012',
            'type' => 'undergraduate',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('study_programs')->insert([
            'name' => 'Ingeniero Agroquímico - Plan 2014',
            'type' => 'undergraduate',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('study_programs')->insert([
            'name' => 'Ingeniero Químico Ambiental - Plan 2014',
            'type' => 'undergraduate',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('study_programs')->insert([
            'name' => 'Ingeniero Químico en Alimentos - Plan 2014',
            'type' => 'undergraduate',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('study_programs')->insert([
            'name' => 'Ingeniero Químico en Materiales - 2014',
            'type' => 'undergraduate',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('study_programs')->insert([
            'name' => 'Químico Farmacéutico Biólogo - Plan 2014',
            'type' => 'undergraduate',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        /* ========================================
        Postgrados
        ========================================= */
        DB::table('study_programs')->insert([
            'name' => 'Especialidad en Bioquímica Clínica - Plan 2013',
            'type' => 'graduate',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('study_programs')->insert([
            'name' => 'Especialidad en Inocuidad de los Alimentos',
            'type' => 'graduate',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('study_programs')->insert([
            'name' => 'Maestría en Ciencias de la Energía - Plan 2013',
            'type' => 'graduate',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('study_programs')->insert([
            'name' => 'Maestría en Ciencias  Químico Biológicas - Plan 2015',
            'type' => 'graduate',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('study_programs')->insert([
            'name' => 'Maestría en Ciencia y Tecnología Ambiental - Plan 2013',
            'type' => 'graduate',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('study_programs')->insert([
            'name' => 'Maestría en Ciencia y Tecnología de los Alimentos (PROPAC) - Plan 2013',
            'type' => 'graduate',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('study_programs')->insert([
            'name' => 'Maestría en Química Clínica Diagnóstica',
            'type' => 'graduate',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('study_programs')->insert([
            'name' => 'Doctorado en Ciencia de los Alimentos (PROPAC) - Plan 2014',
            'type' => 'graduate',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('study_programs')->insert([
            'name' => 'Doctorado en Ciencias Químico Biológicas - Plan 2013',
            'type' => 'graduate',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('study_programs')->insert([
            'name' => 'Doctorado en Ciencias de la Energía',
            'type' => 'graduate',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('study_programs')->insert([
            'name' => 'Doctorado en Ciencia y Tecnología Químico-Ambiental',
            'type' => 'graduate',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
