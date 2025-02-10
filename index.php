<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krisah Montessori School - Ghana</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="font-sans">
    <!-- Navigation -->
    <nav class="fixed w-full bg-white shadow-md z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <img src="logo.png" alt="School Logo" class="h-12 w-auto mr-2">
                    <span class="text-2xl font-bold text-green-700">Krisah Montessori</span>
                </div>
                
                <!-- Mobile menu button -->
                <button id="mobile-menu-button" class="md:hidden">
                    <i class="fas fa-bars text-green-700 text-2xl"></i>
                </button>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex space-x-6">
                    <a href="#home" class="text-gray-600 hover:text-green-700">Home</a>
                    <a href="#about" class="text-gray-600 hover:text-green-700">About Us</a>
                    <a href="#admissions" class="text-gray-600 hover:text-green-700">Admissions</a>
                    <a href="#gallery" class="text-gray-600 hover:text-green-700">Gallery</a>
                    <a href="#news" class="text-gray-600 hover:text-green-700">News & Events</a>
                    <a href="#faq" class="text-gray-600 hover:text-green-700">FAQs</a>
                    <a href="#contact" class="text-gray-600 hover:text-green-700">Contact</a>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <a href="#home" class="block py-2 text-gray-600 hover:text-green-700">Home</a>
                <a href="#about" class="block py-2 text-gray-600 hover:text-green-700">About Us</a>
                <a href="#admissions" class="block py-2 text-gray-600 hover:text-green-700">Admissions</a>
                <a href="#gallery" class="block py-2 text-gray-600 hover:text-green-700">Gallery</a>
                <a href="#news" class="block py-2 text-gray-600 hover:text-green-700">News & Events</a>
                <a href="#faq" class="block py-2 text-gray-600 hover:text-green-700">FAQs</a>
                <a href="#contact" class="block py-2 text-gray-600 hover:text-green-700">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-20">
        <div class="relative h-[600px]">
            <div class="absolute inset-0 bg-black/50"></div>
            <div class="absolute inset-0 flex items-center justify-center text-center">
                <div class="text-white">
                    <h1 class="text-5xl font-bold mb-4">Welcome to Krisah Montessori School</h1>
                    <p class="text-xl mb-8">Nurturing Excellence in Western Region, Ghana</p>
                    <a href="#contact" class="bg-green-700 text-white px-8 py-3 rounded-full hover:bg-green-600 transition">Contact Us</a>
                </div>
            </div>
            <img src="school-building.jpg" alt="School Building" class="w-full h-full object-cover">
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 text-green-700">About Us</h2>
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Our Vision</h3>
                    <p class="text-gray-600 mb-6">To be the leading Montessori institution in Ghana, nurturing well-rounded individuals who are prepared for global challenges.</p>
                    
                    <h3 class="text-2xl font-semibold mb-4">Our Mission</h3>
                    <p class="text-gray-600">To provide quality education through the Montessori method, fostering independence, creativity, and academic excellence in a nurturing environment.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold mb-4">Why Choose Us?</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-700 mr-2"></i>
                            <span>Certified Montessori Teachers</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-700 mr-2"></i>
                            <span>Modern Learning Facilities</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-700 mr-2"></i>
                            <span>Individual Attention</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-700 mr-2"></i>
                            <span>Holistic Development</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Admissions Section -->
    <section id="admissions" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 text-green-700">Admissions</h2>
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold mb-4">Admission Process</h3>
                    <ol class="list-decimal list-inside space-y-4 text-gray-600">
                        <li>Complete the online application form</li>
                        <li>Submit required documents</li>
                        <li>Schedule an interview</li>
                        <li>Assessment test (if applicable)</li>
                        <li>Admission decision</li>
                    </ol>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Required Documents</h3>
                    <ul class="space-y-4 text-gray-600">
                        <li class="flex items-center">
                            <i class="fas fa-file-alt text-green-700 mr-2"></i>
                            <span>Birth Certificate</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-file-alt text-green-700 mr-2"></i>
                            <span>Previous School Records</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-file-alt text-green-700 mr-2"></i>
                            <span>Immunization Records</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-file-alt text-green-700 mr-2"></i>
                            <span>Passport Photos</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 text-green-700">Gallery</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Add your gallery images here -->
                <div class="aspect-square bg-gray-200 rounded-lg"></div>
                <div class="aspect-square bg-gray-200 rounded-lg"></div>
                <div class="aspect-square bg-gray-200 rounded-lg"></div>
                <div class="aspect-square bg-gray-200 rounded-lg"></div>
                <div class="aspect-square bg-gray-200 rounded-lg"></div>
                <div class="aspect-square bg-gray-200 rounded-lg"></div>
                <div class="aspect-square bg-gray-200 rounded-lg"></div>
                <div class="aspect-square bg-gray-200 rounded-lg"></div>
            </div>
        </div>
    </section>

    <!-- News & Events Section -->
    <section id="news" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 text-green-700">News & Events</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- News Card 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="news1.jpg" alt="News 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Annual Sports Day</h3>
                        <p class="text-gray-600 mb-4">Join us for our annual sports day celebration...</p>
                        <span class="text-sm text-green-700">March 15, 2024</span>
                    </div>
                </div>
                <!-- News Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="news2.jpg" alt="News 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Art Exhibition</h3>
                        <p class="text-gray-600 mb-4">Showcasing our students' artistic talents...</p>
                        <span class="text-sm text-green-700">April 5, 2024</span>
                    </div>
                </div>
                <!-- News Card 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="news3.jpg" alt="News 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Parent-Teacher Meeting</h3>
                        <p class="text-gray-600 mb-4">Schedule for the upcoming parent-teacher meeting...</p>
                        <span class="text-sm text-green-700">April 20, 2024</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 text-green-700">Frequently Asked Questions</h2>
            <div class="max-w-3xl mx-auto space-y-6">
                <!-- FAQ Item -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-semibold mb-2">What is the Montessori method?</h3>
                    <p class="text-gray-600">The Montessori method is an educational approach that emphasizes independence, freedom within limits, and respect for a child's natural psychological development.</p>
                </div>
                <!-- Add more FAQ items as needed -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 text-green-700">Contact Us</h2>
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Get in Touch</h3>
                    <div class="space-y-4">
                        <p class="flex items-center">
                            <i class="fas fa-map-marker-alt text-green-700 mr-2 w-6"></i>
                            <span>Western Region, Ghana</span>
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-phone text-green-700 mr-2 w-6"></i>
                            <span>+233 XX XXX XXXX</span>
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-envelope text-green-700 mr-2 w-6"></i>
                            <span>info@krisahmontessori.edu.gh</span>
                        </p>
                    </div>
                </div>
                <div>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-gray-700 mb-2">Name</label>
                            <input type="text" class="w-full p-2 border rounded-lg">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Email</label>
                            <input type="email" class="w-full p-2 border rounded-lg">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Message</label>
                            <textarea class="w-full p-2 border rounded-lg" rows="4"></textarea>
                        </div>
                        <button type="submit" class="bg-green-700 text-white px-6 py-2 rounded-lg hover:bg-green-600 transition">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-700 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h4 class="text-xl font-semibold mb-4">Krisah Montessori</h4>
                    <p>Nurturing minds, Building futures</p>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#about" class="hover:text-gray-300">About Us</a></li>
                        <li><a href="#admissions" class="hover:text-gray-300">Admissions</a></li>
                        <li><a href="#contact" class="hover:text-gray-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-8 pt-8 border-t border-green-600">
                <p>&copy; 2024 Krisah Montessori School. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking a link
        const mobileLinks = mobileMenu.getElementsByTagName('a');
        for (const link of mobileLinks) {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        }
    </script>
</body>
</html>
