<!DOCTYPE html>
<html lang="es">
  <head>
    <meta name="viewport" content="width=device-width , initial-scale=1.0" />
    <meta charset="UTF-8" />
    <title>Bowie</title>
    <link rel="stylesheet" href="./estilos/output.css" />
  </head>
  <body class="h-full bg-[--color-primary]">
    <div class="min-h-full">
      <header class="bg-[--color-primary] shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          <h1
            class="text-3xl font-bold tracking-tight flex justify-center text-[#f8fafc]"
          >
            Bowie.com
          </h1>
          <br />
          <hr class="text-[#f8fafc]" />
        </div>
      </header>
      <main class="bg-[--color-primary]">
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
          <div class="flex content-stretch justify-evenly flex-row flex-nowrap">
            <div class="p-10 rounded-3xl h-3/4 bg-[#f8fafc]">
              <h1 class="text-center mb-5 text-[#333333]">DATOS DE USUARIO</h1>
              <form class="grid grid-cols-2 gap-5">
                <div>
                  <input
                    class="w-full h-10 text-base border-none outline-none p-3 box-border b-[#f0f0f0]"
                    type="text"
                    id="nombre"
                    name="nombre"
                    placeholder="Nombre"
                    required
                  />
                </div>
                <div>
                  <input
                    class="w-full h-10 text-base border-none outline-none p-3 box-border b-[#f0f0f0]"
                    type="text"
                    id="apellido"
                    name="Apellido"
                    placeholder="Apellido"
                    required
                  />
                </div>
                <div>
                  <input
                    class="w-full h-10 text-base border-none outline-none p-3 box-border b-[#f0f0f0]"
                    type="text"
                    id="direccion"
                    name="direccion"
                    placeholder="Direccion"
                    required
                  />
                </div>
                <div>
                  <input
                    class="w-full h-10 text-base border-none outline-none p-3 box-border b-[#f0f0f0]"
                    type="tel"
                    id="telefono"
                    name="telefono"
                    placeholder="telefono"
                    required
                  />
                </div>
                <div>
                  <input
                    class="w-full h-10 text-base border-none outline-none p-3 box-border b-[#f0f0f0]"
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Email"
                    required
                  />
                </div>
                <div>
                  <label class="block mb-1 font-bold text-[#333333] " for="pago">Medio de pago:</label>
                  <select
                    class="w-full h-10 text-base border-none outline-none p-3 box-border b-[#f0f0f0]"
                    id="pago"
                    name="pago"
                    required
                  >
                    <option value="">Seleccione una opción</option>
                    <option value="tarjeta">Tarjeta de crédito o débito</option>
                    <option value="efectivo">Efectivo</option>
                    <option value="transferencia">
                      Transferencia bancaria
                    </option>
                    <option value="paypal">PayPal</option>
                  </select>
                </div>
                <div>
                  <label class="block mb-1 font-bold text-[#333333] " for="productos">Listado de productos:</label>
                  <textarea
                    class=" h-auto resize-y w-full text-base border-none outline-none p-3 box-border b-[#f0f0f0]"
                    id="productos"
                    name="productos"
                    rows="5"
                    cols="40"
                    required
                  ></textarea>
                </div>
                <br />
                <div>
                  <input type="submit" value="Enviar" id="boton_enviar" class="b-[#f0f0f0] text-[#333333] cursor-pointer" />
                </div>
              </form>
            </div>
          </div>
        </div>
      </main>
      <footer class="bg-[#262626] w-full">
        <div class="flex justify-center">
          <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
            <h1 class="text-[#f8fafc]">Copyright &copy; Bowie.com</h1>
            <div class="flex h-16 items-center justify-between">
              <div class="flex items-center">
                <a
                  class="rounded-md px-3 py-2 text-sm font-medium"
                  href="https://twitter.com"
                  target="_blank"
                >
                  <img
                    class="h-8 w-8"
                    src="./src/imagenes/logo_twitter.png"
                    alt="Twitter"
                  />
                </a>
                <a
                  class="rounded-md px-3 py-2 text-sm font-medium"
                  href="https://facebook.com"
                  target="_blank"
                >
                  <img
                    class="h-8 w-8"
                    src="./src/imagenes/logo_facebook.png"
                    alt="Facebook"
                  />
                </a>
                <a
                  class=" rounded-md px-3 py-2 text-sm font-medium"
                  href="https://linkedin.com"
                  target="_blank"
                >
                  <img
                    class="h-8 w-8"
                    src="./src/imagenes/logo_linkedin.png"
                    alt="LinkedIn"
                  />
                </a>
                <a
                  class="rounded-md px-3 py-2 text-sm font-medium"
                  href="https://instagram.com"
                  target="_blank"
                >
                  <img
                    class="h-8 w-8"
                    src="./src/imagenes/logo_instagram.png"
                    alt="Instagram"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>