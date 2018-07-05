<html>
	<head>
		<style>
		.header{font-size:120%;
				margin-left:30%;
				font-weight: bold;}
		.mas{
			margin-left:15%;
		}
		.margen{
			margin-left:40%;
		}
		.footer{
			margin-left:30%;
		}
		</style>
	</head>
	<body>
		<div class="header">
			<p>Contrato de adopcion de mascotas</p>
			<p class="mas">Compareciendo</p>
		</div>
		<div class="cuerpo">
			<p>De una parte, D./Dña. {{ $user->name }}, mayor de edad en su propio nombre y Derecho, con DNI 12345678Z, con domicilio {{$user->direccion}}, con teléfono {{$user->telefono}}, actual propietario/a y responsable del animal de la especie {{$animal->tipoAnimal}}, raza {{$animal->raza}}, en adelante el Adoptante.</p>
			<p>Y, de otra parte, asociación {{$asoc->nombre}}, con CIF 98765432A, con domicilio {{$asoc->direccion}}, con telefono {{$asoc->telefono}}, en adelante la Asociacón </p>
			<p>Ambas partes acuerdan celebrar el presente <label>CONTRATO</label>, de acuerdo con las siguientes</p>
			<h4 class="margen">ESTIPULACIONES</h4>
			<ol>
				<li>El adoptante se compromete a adoptar al animal de la Asociación con los datos que se reseñan a continuación, hata que dicho animal muera:<br>
				Especie: {{$animal->tipoAnimal}}<br>
				Nombre: {{$animal->nombre}}<br>
				Raza: {{$animal->raza}}<br>
				Sexo: {{$animal->sexo}}<br>
				Edad: {{$animal->edad}}<br>
				Color: {{$animal->color}}<br>
				</li>
				<li>El adoptante declara adoptar al animal única y exclusivamente como animal de compañía.</li>
				<li>El animal entregado en adopción no pdrá ser utilizado para:
					<ul>
						<li>Caza de cualquier tipo y circunstancia</li>
						<li>Experimentación de cualquier tipo.</li>
						<li>La participación en peleas o enfrentamientos con otros animales.</li>
						<li>La cría.</li>
						<li>Guarda de propiedades.</li>
						<li>Estancia en fincas o chalets de fin de semana.</li>
						<li>Circos u otro tipo de espectáculos.</li>
						<li>Participación en películas o series de televisión</li>
						<li>Perro policía o fines militares</li>
						<li>Perro guía</li>
					</ul>
				</li>
				<li>En ningún caso podrá el animal permanecer atado ni encerrado en jaulas, habitaciones,
terrazas, patios o garajes.</li>
				<li>En caso de que el animal tenga la consideración de Perro Potencialmente Peligroso, el
adoptante, que acredita hallarse en posesión de la licencia correspondiente mediante
exhibición de la misma, incorporando a este contrato fotocopia de dicha licencia, póliza del
contrato de seguro de responsabilidad civil exigido por la normativa vigente, y el justificante
de su inscripción en el Registro Municipal competente, se compromete a cumplir todas las
medidas de seguridad exigidas por dicha normativa, tales como pasear al animal con bozal y
correa no extensible en los sitios públicos.</li>
				<li>En ningún caso podrá permanecer en lugar donde no pueda resguardarse de la lluvia, del
frío o del sol, o sin espacio suficiente para el normal desarrollo de su especie.</li>
				<li>En ningún caso se podrá someter al animal a cualquier tratamiento indebido y contrario a
las disposiciones de la Ley de Protección Animal vigente y demás normativa que la
desarrolle, y Código Penal.</li>
				<li>El adoptante se compromete con este contrato a proporcionar al animal alimentación y
bebida suficiente y adecuada, los cuidados de higiene necesarios, la debida asistencia
veterinaria, cuidarlo y respetarlo.</li>
				<li>El adoptante se compromete por el presente contrato a:<br>
- Desparasitar internamente al animal cada 3 meses con producto veterinario
adecuado para ello.<br>
- Desparasitar externamente al animal con producto veterinario adecuado y
renovado para que siempre esté activo.<br>
- Vacunarle anualmente con vacuna heptavalente y con vacuna de la rabia.<br>
- Realizar anualmente analítica para la detección de leishmania y erlichia en el mes
de enero o febrero.<br>
- Esterilizarlo en la fecha adecuada. El adoptante deberá aportar a la Asociación un
informe veterinario que acredite haberse realizado dicha esterilización, informe
que ha de estar debidamente sellado, firmado, con nº de colegiado y con
identificación del animal.</li>
				<li>El adoptante se compromete con este contrato a proporcionar al animal compañía, a
tenerle consigo, proporcionarle afecto y atenciones, y permitirle hacer el ejercicio necesario
sacándolo a pasear a la calle todos los días.</li>
				<li>Asimismo se compromete a no regalar, vender o ceder por cualquier título, inter vivos o
mortis causa, al animal; igualmente se compromete a no abandonar al animal.</li>
				<li>Ambas partes, tras manifestar su plena capacidad de obrar, prestan libre y
voluntariamente su consentimiento al presente contrato, formando por cinco folios a una sola
cara, aceptando expresamente todas y cada una de las condiciones y obligaciones dimanantes
del mismo.</li>
			</ol>
		</div>
		<div  class="footer">
			{{setlocale(LC_ALL,"es_ES")}}

			En Zaragoza, {{strftime("a %d de %B de %Y")}}
		</div><br><br>
		<p>Firma adoptante: </p><br><br><br>
		<p>Firma Asociación: </p>
	</body>
</html>