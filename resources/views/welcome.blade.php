
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Page title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/tailwind/tailwind-theme.css">
    <link rel="icon" href="favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon.png">
    <script src="js/main.js"></script>
  </head>
  <body class="bg-body text-body font-body">
    <div class="container mx-auto px-4">
      <nav class="flex flex-wrap items-center justify-between p-4">
        <!-- Site title -->
        <div class="lg:order-2 w-auto lg:w-1/5 lg:text-center">
          <a class="text-xl text-indigo-500 font-semibold" href="#">Laravel Class</a>
        </div>

        <!-- The mobile menu -->
        <div class="block lg:hidden">
          <button class="navbar-burger flex items-center py-2 px-3 text-indigo-500 rounded border border-indigo-500">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
            </svg>
          </button>    
        </div>

        <!-- Menu Links -->
        <div class="navbar-menu hidden lg:order-1 lg:block w-full lg:w-2/5">
          <a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-blue-700" href="#">Welcome</a>
          <a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-blue-700" href="#">Podcasts</a>
          <a class="block lg:inline-block mt-4 lg:mt-0 text-blue-900 hover:text-blue-700" href="#">Students</a>
        </div>

        <!-- Menu Links -->
        <div class="navbar-menu hidden lg:order-3 lg:block w-full lg:w-2/5 lg:text-right">
          <a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-blue-700" href="#">Blog</a>
          <a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-blue-900 hover:text-blue-700" href="#">FAQ</a>
          <a class="block lg:inline-block mt-4 lg:mt-0 text-blue-900 hover:text-blue-700" href="#">Contact</a>
        </div>
      </nav>

      <!-- Hero section -->
      <section class="py-12 px-4 text-center">
        <h2 class="text-4xl mb-8 font-heading">Learn Laravel For Free</h2>
        <div class="max-w-2xl mx-auto"><img class="rounded shadow-md" src="placeholders/pictures/office.jpg" alt="">
          <div class="text-center mt-8 mb-6">
            <button class="inline-flex items-center justify-center h-3 w-3 mr-2 bg-gray-800 rounded-full"></button>
            <button class="inline-flex items-center justify-center h-3 w-3 mr-2 bg-gray-600 rounded-full"></button>
            <button class="inline-flex items-center justify-center h-3 w-3 mr-2 bg-gray-600 rounded-full"></button>
          </div>
          <div>
            <h3 class="text-2xl mb-4 font-heading">Client: Realweb</h3>
            <p class="text-gray-500 leading-relaxed">Great offer, competitive prices, professional service. That’s how I’d remember the Dunder Mifflin. Although I had to switch paper provider, sometimes I really miss Dunder family. I also got gift basket from the team!</p>
          </div>
        </div>
      </section>

      <!-- Do action section -->
      <section class="py-12 px-4 text-center">
        <div class="w-full max-w-2xl mx-auto">
          <h2 class="text-5xl leading-tight font-heading">No paper plane can be made without paper</h2>
          <p class="mt-6 mb-8 text-gray-500 leading-relaxed">Professional, dedicated, local. Dunder Mifflin is on its best patch to change the way you think about paper. That’s us - people who sell limitless paper in the paperless world.</p><a class="inline-block py-4 px-8 leading-none text-white bg-indigo-500 hover:bg-indigo-600 rounded shadow" href="#">Sign up</a>
        </div>
      </section>

      <!-- Team Section -->
      <section class="py-12 px-4 text-center">
        <h2 class="text-3xl mb-8 font-heading">How to get Dunder Mifflined?</h2>
        <div class="flex flex-wrap items-center justify-center -mx-8 mb-12">
          <div class="lg:w-1/3 px-8 mb-8 lg:mb-0"><img class="mx-auto" src="placeholders/icons/mobile.svg" alt="">
            <h3 class="text-2xl mt-6 mb-3 font-heading">Contact our Sales</h3>
            <p class="text-gray-500 leading-relaxed">During the phone call we will be able to present you all details of cooperation, pricing and special offers, suited for your company.</p>
          </div>
          <div class="lg:w-1/3 px-8 mb-8 lg:mb-0"><img class="mx-auto" src="placeholders/icons/pen.svg" alt="">
            <h3 class="text-2xl mt-6 mb-3 font-heading">Sign the documents</h3>
            <p class="text-gray-500 leading-relaxed">We can also talk during business meeting, or visit your office anytime you want! Our employees will provide proper contracts.</p>
          </div>
          <div class="lg:w-1/3 px-8 mb-8 lg:mb-0"><img class="mx-auto" src="placeholders/icons/van.svg" alt="">
            <h3 class="text-2xl mt-6 mb-3 font-heading">Wait for delivery!</h3>
            <p class="text-gray-500 leading-relaxed">You don’t buy a pig... or shall I say a paper in a poke. The supplies will be delivered to your company every first Monday of the month.</p>
          </div>
        </div>
        <div><a class="inline-block py-4 px-8 leading-none text-white bg-indigo-500 hover:bg-indigo-600 rounded shadow" href="#">Learn more</a></div>
      </section>

      <!-- Team section -->
      <section class="py-12 px-4 text-center">
        <h2 class="text-4xl mb-2 leading-tight font-heading">Dunder Mifflin Family</h2>
        <p class="max-w-xl mx-auto mb-12 text-gray-500">Because no great company could exist without accountants, sellers, stock workers, and of course - paper.</p>
        <div class="flex flex-wrap -mx-8">
          <div class="md:w-1/3 p-8"><img class="w-1/3 mx-auto mb-4 rounded-full" src="placeholders/pictures/female_avatar.svg" alt="">
            <h3 class="text-xl font-heading">Karen Filippelli</h3><span>Regional Manager</span>
            <p class="mt-4 text-gray-500 leading-relaxed">Started as a Sales representative at Stamford branch, moved to Scranton. All of us left as soon as possible except for Andy.</p>
          </div>
          <div class="md:w-1/3 p-8 md:border-l"><img class="w-1/3 mx-auto mb-4 rounded-full" src="placeholders/pictures/male_avatar.svg" alt="">
            <h3 class="text-xl font-heading">Darryl Philbin</h3><span>Marketing Director</span>
            <p class="mt-4 text-gray-500 leading-relaxed">The warehouse is not a piece of cake, man. I started there as an Assistant and finally got a promotion to the Marketing Director.</p>
          </div>
          <div class="md:w-1/3 p-8 md:border-l"><img class="w-1/3 mx-auto mb-4 rounded-full" src="placeholders/pictures/female_avatar.svg" alt="">
            <h3 class="text-xl font-heading">Kelly Kapoor</h3><span>Customer Service</span>
            <p class="mt-4 text-gray-500 leading-relaxed">I work for Dunder Mifflin for a few years now. I learned a lot. You know, one person department is not easy to manage.</p>
          </div>
        </div>
      </section>

      <!-- Reting section -->
      <section class="py-12 px-4">
        <div class="flex flex-wrap -mx-4">
          <div class="lg:w-1/2 px-4 mb-4 lg:mb-0"><img class="rounded shadow-md" src="placeholders/pictures/paper.jpg" alt=""></div>
          <div class="lg:w-1/2 px-4">
            <h2 class="text-4xl mb-4 font-heading">All Purpose Paper 80gsm - 500 sheets - 10 Reams</h2>
            <p class="mb-6 text-gray-500 leading-relaxed">Premium quality home and office paper for all printing and copying machines. It is a flexible paper capable of switching from one machine to another with great print results.</p>
            <div class="mb-6">
              <button class="inline-flex items-center justify-center h-8 w-8 mr-2 bg-gray-400 rounded-full"></button>
              <button class="inline-flex items-center justify-center h-8 w-8 mr-2 bg-gray-300 rounded-full"></button>
              <button class="inline-flex items-center justify-center h-8 w-8 mr-2 bg-gray-200 rounded-full"></button>
            </div>
            <div class="flex mb-6"><span class="text-2xl">$10</span>
              <div class="flex flex-wrap ml-4">
                <div class="w-1/2">
                  <input class="appearance-none block w-full py-2 px-4 leading-snug text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded md:rounded-r-none focus:outline-none" type="number" value="1">
                </div>
                <div class="w-1/2">
                  <button class="inline-block w-full py-3 px-4 leading-none text-white bg-indigo-500 hover:bg-indigo-600 rounded md:rounded-l-none">Buy</button>
                </div>
              </div>
            </div>
            <div class="pt-4 border-t"> <a class="text-blue-700 hover:underline" href="#">Add to favorites</a></div>
          </div>
        </div>
      </section>

      <!-- Footer Section -->
      <footer class="p-4">
        <div class="flex flex-col lg:flex-row items-center">
          <div class="w-full lg:w-auto lg:mr-auto text-center lg:text-left">&copy 2019 Dunder Mifflin</div>
          <div class="flex justify-center items-center mt-4 lg:mt-0"><img class="w-6 h-6" src="placeholders/icons/message.svg" alt=""><img class="w-6 h-6 mx-6" src="placeholders/icons/share.svg" alt=""><img class="w-6 h-6" src="placeholders/icons/star.svg" alt=""></div>
        </div>
      </footer>
      
    </div>
  </body>
</html>