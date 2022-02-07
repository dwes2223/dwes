Notas:

- Crear clases
php artisan make:model Module -mscr
php artisan make:factory ModuleFactory

- Definir las relaciones

p. ej. en el study:
    public function Modules()
    {
        return $this->hasMany(Module::class);
    }

- Migración de modules
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('code', 4);
            $table->string('name');
            $table->foreignId('study_id')->constrained();
            // $table->unsignedBigInteger('study_id');
            // $table->foreign('study_id')->references('id')->on('studies');
            $table->integer('hours');
            $table->timestamps();
        });
    }

- Factory de Module:

        return [
            'code' => Str::random(4),
            'name' => $this->faker->sentence,
            'hours' => rand(2,8)
        ];

- En el Study Seeder:

En el run():

        Study::factory()
            ->count(10)
            ->has(Module::factory()->count(5))
            ->create(); 

- A partir de ahí vamos a revisar el CRUD:
  - Listado de modules
  - Show de study con modulos
  - Creación de modules con "select"
  - Creación de modules desde el estudio
  - Borrado de modules
  - Edición de modules desde moodules, con select.


  
