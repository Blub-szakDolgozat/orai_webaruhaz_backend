<?php

use App\Models\Termek;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('termeks', function (Blueprint $table) {
            $table->id();
            $table->string('cim');
            $table->string('leiras');
            $table->integer('ar');
            $table->smallInteger('db')->default(1);
            $table->timestamps();
        });

        Termek::create([
            'cim'=>'Neonhal',
            'leiras'=>'Világító piros és kék csíkjaival a neonhal igazi látványosságnak számít az akváriumban.',
            'ar'=>1200,
        ]);

        Termek::create([
            'cim'=>'Platti',
            'leiras'=>'A guppihoz hasonlóan a platti is az elevenszülő fogaspontyfélék családjába tartozik. ',
            'ar'=>1100,
        ]);

        Termek::create([
            'cim'=>'Fekete molli',
            'leiras'=>'A kedvelt díszhal, a fekete molli tulajdonképpen a Dél- és Közép-Amerikában őshonos jukatáni fogasponty fekete tenyészalakja.',
            'ar'=>900,
        ]);

        Termek::create([
            'cim'=>'Páncélosharcsa',
            'leiras'=>'A többféle díszhal által lakott akváriumok egy másik kedvelt fajtája a páncélosharcsa, mely a Cordyoras nemébe tartozik. ',
            'ar'=>1500,
        ]);

        Termek::create([
            'cim'=>'Diszkoszhal',
            'leiras'=>'A diszkoszhal nevét a formájának köszönheti: Ez a színes díszhal úgy siklik a vízben, mint egy lebegő diszkoszkorong. ',
            'ar'=>1500,
        ]);

        Termek::create([
            'cim'=>'Sziámi harcoshal',
            'leiras'=>'A Kambodzsából és Thaiföldről származó sziámi harcoshal egyike a legszínpompásabb labirintkopoltyús halaknak.',
            'ar'=>1150,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('termeks');
    }
};
