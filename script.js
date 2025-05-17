document.addEventListener('DOMContentLoaded', function() {
    // Create floating particles
    const container = document.querySelector('.profile-container');
    
    // Create 15 particles
    for (let i = 0; i < 15; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        
        // Random styling
        const size = Math.random() * 5 + 3;
        const posX = Math.random() * 100;
        const posY = Math.random() * 100;
        const duration = Math.random() * 15 + 10;
        const delay = Math.random() * 5;
        
        // Apply styles
        particle.style.cssText = `
            position: absolute;
            width: ${size}px;
            height: ${size}px;
            background: rgba(104, 109, 224, ${Math.random() * 0.5 + 0.1});
            left: ${posX}%;
            top: ${posY}%;
            border-radius: 50%;
            pointer-events: none;
            opacity: 0;
            animation: floatParticle ${duration}s ease-in-out ${delay}s infinite;
        `;
        
        container.appendChild(particle);
    }
    
    // Add floating particle animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes floatParticle {
            0% {
                transform: translate(0, 0);
                opacity: 0;
            }
            25% {
                opacity: 0.8;
            }
            75% {
                opacity: 0.8;
            }
            100% {
                transform: translate(${Math.random() > 0.5 ? '+' : '-'}${Math.random() * 100 + 50}px, ${Math.random() > 0.5 ? '+' : '-'}${Math.random() * 100 + 50}px);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);
    
    // Add hover effect on about section
    const aboutContent = document.querySelector('.about-content');
    aboutContent.addEventListener('mouseenter', function() {
        document.querySelector('.profile-image').style.boxShadow = '0 0 40px rgba(138, 92, 246, 0.9)';
    });
    
    aboutContent.addEventListener('mouseleave', function() {
        document.querySelector('.profile-image').style.boxShadow = '0 0 25px rgba(104, 109, 224, 0.6)';
    });
    
    // Typing effect for skill highlights
    const highlights = document.querySelectorAll('.text-highlight');
    highlights.forEach(highlight => {
        const text = highlight.textContent;
        highlight.textContent = '';
        
        let currentIndex = 0;
        const interval = setInterval(() => {
            if (currentIndex < text.length) {
                highlight.textContent += text[currentIndex];
                currentIndex++;
            } else {
                clearInterval(interval);
            }
        }, 50);
    });
});

// nav bar

document.addEventListener('DOMContentLoaded', () => {
    const navLinks = document.querySelectorAll('.nav-link');
    
    // Add subtle hover effects
    navLinks.forEach(link => {
      link.addEventListener('mouseenter', () => {
        // Slight push effect on other links
        navLinks.forEach(otherLink => {
          if (otherLink !== link) {
            otherLink.style.opacity = '0.7';
            otherLink.style.transform = 'scale(0.95)';
          }
        });
      });
      
      link.addEventListener('mouseleave', () => {
        // Restore other links
        navLinks.forEach(otherLink => {
          otherLink.style.opacity = '1';
          otherLink.style.transform = 'scale(1)';
        });
      });
    });
    
    // Add scroll effects
    window.addEventListener('scroll', () => {
      const nav = document.querySelector('.nav-container');
      if (window.scrollY > 50) {
        nav.style.padding = '0.75rem 2rem';
        nav.style.boxShadow = '0 5px 25px rgba(0, 0, 0, 0.3)';
        nav.style.background = 'linear-gradient(135deg, rgba(15, 23, 42, 0.98), rgba(15, 23, 42, 0.99))';
      } else {
        nav.style.padding = '1rem 2rem';
        nav.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.2)';
        nav.style.background = 'linear-gradient(135deg, rgba(15, 23, 42, 0.95), rgba(15, 23, 42, 0.98))';
      }
    });
  });
// skills 

document.addEventListener('DOMContentLoaded', function() {
    // Initialize skill meters with their levels
    document.querySelectorAll('.skill-meter').forEach(function(meter) {
      const level = meter.getAttribute('data-level');
      meter.style.setProperty('--level', level);
    });
    
    // Add entrance animations for elements
    const cards = document.querySelectorAll('.skill-card');
    cards.forEach((card, index) => {
      card.style.opacity = '0';
      card.style.transform = 'translateY(30px)';
      setTimeout(() => {
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        card.style.opacity = '1';
        card.style.transform = 'translateY(0)';
      }, 200 + (index * 150));
    });
    
    // Add interactive particle effects on hover for cards
    cards.forEach(card => {
      card.addEventListener('mousemove', function(e) {
        const rect = this.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        // Create a particle
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.left = x + 'px';
        particle.style.top = y + 'px';
        particle.style.position = 'absolute';
        particle.style.width = '8px';
        particle.style.height = '8px';
        particle.style.background = `rgba(${Math.random() * 155 + 100}, ${Math.random() * 155 + 100}, ${Math.random() * 255}, 0.7)`;
        particle.style.borderRadius = '50%';
        particle.style.pointerEvents = 'none';
        particle.style.zIndex = '10';
        
        this.appendChild(particle);
        
        // Animate and remove the particle
        setTimeout(() => {
          particle.style.transition = 'all 0.8s ease';
          particle.style.transform = `translate(${(Math.random() - 0.5) * 100}px, ${(Math.random() - 0.5) * 100}px)`;
          particle.style.opacity = '0';
          setTimeout(() => particle.remove(), 800);
        }, 10);
      });
    });
    
    // 3D tilt effect for cards
    cards.forEach(card => {
      card.addEventListener('mousemove', function(e) {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        
        const angleY = (x - centerX) / 20;
        const angleX = (centerY - y) / 20;
        
        card.querySelector('.skill-card-inner').style.transform = `rotateY(${angleY}deg) rotateX(${angleX}deg)`;
      });
      
      card.addEventListener('mouseleave', function() {
        card.querySelector('.skill-card-inner').style.transform = 'rotateY(0) rotateX(0)';
      });
    });
    
    // Add glow effect on skill pills
    const pills = document.querySelectorAll('.skill-pill');
    pills.forEach(pill => {
      pill.addEventListener('mouseenter', function() {
        const color = window.getComputedStyle(pill.querySelector('span')).color;
        pill.style.boxShadow = `0 0 15px ${color}`;
      });
      
      pill.addEventListener('mouseleave', function() {
        pill.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)';
      });
    });
  });

//   experience 

// Initialize animation on scroll
document.addEventListener('DOMContentLoaded', () => {
    // Function to check if an element is in viewport
    function isInViewport(element) {
      const rect = element.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }
  
    // Get all timeline items
    const timelineItems = document.querySelectorAll('.timeline-item');
    
    // Function to handle animation on scroll
    function handleScroll() {
      timelineItems.forEach(item => {
        if (isInViewport(item)) {
          item.classList.add('in-view');
        }
      });
    }
  
    // Initial check
    handleScroll();
    
    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);
    
    // Add hover effects for cards
    const cards = document.querySelectorAll('.timeline-content > div');
    cards.forEach(card => {
      card.addEventListener('mouseenter', () => {
        card.style.transform = 'translateY(-5px)';
      });
      
      card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0)';
      });
    });
  });

//   projects and education 

// Document ready function
document.addEventListener('DOMContentLoaded', function() {
    // Observer for education items
    const educationObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate');
        }
      });
    }, { threshold: 0.1 });
  
    // Observe all education items
    document.querySelectorAll('.education-item').forEach(item => {
      educationObserver.observe(item);
    });
  
    // Create animated circles in the tech-circles div
    const techCircles = document.querySelector('.tech-circles');
    const colors = ['rgba(99, 102, 241, 0.05)', 'rgba(59, 130, 246, 0.05)', 'rgba(16, 185, 129, 0.05)'];
    
    for (let i = 0; i < 15; i++) {
      const circle = document.createElement('div');
      const size = Math.random() * 200 + 50;
      const color = colors[Math.floor(Math.random() * colors.length)];
      
      circle.style.position = 'absolute';
      circle.style.width = `${size}px`;
      circle.style.height = `${size}px`;
      circle.style.borderRadius = '50%';
      circle.style.background = color;
      circle.style.left = `${Math.random() * 100}%`;
      circle.style.top = `${Math.random() * 100}%`;
      circle.style.transform = 'translate(-50%, -50%)';
      circle.style.pointerEvents = 'none';
      
      // Add animation
      circle.style.animation = `float ${Math.random() * 10 + 10}s infinite alternate ease-in-out`;
      circle.style.animationDelay = `${Math.random() * 5}s`;
      
      techCircles.appendChild(circle);
    }
    
    // Create floating shapes for education section background
    const floatingShapes = document.querySelector('.floating-shapes');
    const shapeTypes = ['circle', 'square', 'triangle'];
    
    for (let i = 0; i < 10; i++) {
      const shape = document.createElement('div');
      const size = Math.random() * 100 + 30;
      const shapeType = shapeTypes[Math.floor(Math.random() * shapeTypes.length)];
      const color = colors[Math.floor(Math.random() * colors.length)];
      
      shape.style.position = 'absolute';
      shape.style.width = `${size}px`;
      shape.style.height = `${size}px`;
      
      if (shapeType === 'circle') {
        shape.style.borderRadius = '50%';
      } else if (shapeType === 'triangle') {
        shape.style.width = '0';
        shape.style.height = '0';
        shape.style.borderLeft = `${size/2}px solid transparent`;
        shape.style.borderRight = `${size/2}px solid transparent`;
        shape.style.borderBottom = `${size}px solid ${color}`;
        shape.style.background = 'transparent';
      }
      
      if (shapeType !== 'triangle') {
        shape.style.background = color;
      }
      
      shape.style.left = `${Math.random() * 100}%`;
      shape.style.top = `${Math.random() * 100}%`;
      shape.style.opacity = '0.4';
      shape.style.pointerEvents = 'none';
      
      // Add animation
      shape.style.animation = `float ${Math.random() * 15 + 15}s infinite alternate ease-in-out`;
      shape.style.animationDelay = `${Math.random() * 5}s`;
      
      floatingShapes.appendChild(shape);
    }
    
    // Project cards hover effects enhancement
    const projectCards = document.querySelectorAll('.project-card');
    
    projectCards.forEach(card => {
      card.addEventListener('mouseenter', () => {
        card.style.transform = 'scale(1.03)';
      });
      
      card.addEventListener('mouseleave', () => {
        card.style.transform = 'scale(1)';
      });
    });
    
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        
        if (targetElement) {
          window.scrollTo({
            top: targetElement.offsetTop,
            behavior: 'smooth'
          });
        }
      });
    });
    
    // Glitch text effect enhancement
    const glitchTexts = document.querySelectorAll('.glitch-text');
    
    glitchTexts.forEach(text => {
      text.addEventListener('mouseover', () => {
        text.style.animation = 'glitch 0.3s infinite';
        
        setTimeout(() => {
          text.style.animation = '';
        }, 1000);
      });
    });
    
    // Reveal animations on scroll for all sections
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('reveal-animation');
        }
      });
    }, { threshold: 0.1 });
    
    // Observe elements with reveal-on-scroll class
    document.querySelectorAll('.reveal-text, .project-card, .edu-card').forEach(item => {
      revealObserver.observe(item);
    });
    
    // Add parallax effect to background elements
    window.addEventListener('scroll', () => {
      const scrollPosition = window.scrollY;
      
      // Parallax for tech circles
      if (techCircles) {
        techCircles.style.transform = `translateY(${scrollPosition * 0.1}px)`;
      }
      
      // Parallax for floating shapes
      if (floatingShapes) {
        floatingShapes.style.transform = `translateY(${scrollPosition * 0.05}px)`;
      }
    });
    
    // Add typing animation effect for subtitles
    const subtitles = document.querySelectorAll('h1 + p');
    
    subtitles.forEach(subtitle => {
      const text = subtitle.textContent;
      subtitle.textContent = '';
      
      const typingEffect = () => {
        let i = 0;
        const typing = setInterval(() => {
          if (i < text.length) {
            subtitle.textContent += text.charAt(i);
            i++;
          } else {
            clearInterval(typing);
          }
        }, 50);
      };
      
      // Start typing effect when element comes into view
      const typingObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            typingEffect();
            typingObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.5 });
      
      typingObserver.observe(subtitle);
    });
  });
  
  // Additional function for mobile menu toggle if needed
  function toggleMobileMenu() {
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (mobileMenu) {
      mobileMenu.classList.toggle('active');
    }
  }
  
  // Function to handle dark/light mode toggle if needed
  function toggleDarkMode() {
    document.body.classList.toggle('light-mode');
    
    // Save preference to localStorage
    const isDarkMode = document.body.classList.contains('light-mode') ? 'light' : 'dark';
    localStorage.setItem('theme', isDarkMode);
  }
  
  // Check for saved theme preference on load
  function checkThemePreference() {
    const savedTheme = localStorage.getItem('theme');
    
    if (savedTheme === 'light') {
      document.body.classList.add('light-mode');
    }
  }
  
  // Call theme preference check on page load
  checkThemePreference();

//   achievmnts

document.addEventListener('DOMContentLoaded', function() {
    // Set highlight colors for each card
    const highlightColors = [
        '#eab308', // yellow
        '#3b82f6', // blue
        '#9333ea', // purple
        '#22c55e', // green
        '#ef4444', // red
        '#6366f1'  // indigo
    ];
    
    // Apply highlight colors to cards
    document.querySelectorAll('.achievement-card').forEach((card, index) => {
        const inner = card.querySelector('.achievement-inner');
        inner.style.setProperty('--highlight-color', highlightColors[index % highlightColors.length]);
    });
    
    // Intersection Observer for animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const card = entry.target;
                const delay = parseInt(card.getAttribute('data-delay') || '0');
                
                setTimeout(() => {
                    card.style.animation = `fadeInUp 0.8s cubic-bezier(0.2, 0.8, 0.2, 1) forwards`;
                    card.style.opacity = '1';
                }, delay);
                
                observer.unobserve(card);
            }
        });
    }, observerOptions);
    
    // Observe all achievement cards
    document.querySelectorAll('.achievement-card').forEach(card => {
        observer.observe(card);
    });
    
    // Create floating particles
    const particlesContainer = document.querySelector('.achievements-particles');
    const particleCount = 30;
    
    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.style.position = 'absolute';
        particle.style.width = `${Math.random() * 4 + 1}px`;
        particle.style.height = particle.style.width;
        particle.style.backgroundColor = `rgba(255, 255, 255, ${Math.random() * 0.15 + 0.05})`;
        particle.style.borderRadius = '50%';
        particle.style.top = `${Math.random() * 100}%`;
        particle.style.left = `${Math.random() * 100}%`;
        
        // Random animation duration and delay
        const duration = Math.random() * 20 + 10;
        const delay = Math.random() * 5;
        
        particle.style.animation = `floatAnimation ${duration}s ease-in-out ${delay}s infinite`;
        particlesContainer.appendChild(particle);
    }
});

// contact footer

// Adding dynamic elements to enhance the animation effects
document.addEventListener('DOMContentLoaded', function() {
    // Add dynamic particles
    const particleContainer = document.querySelector('.particle-container');
    
    // Generate additional random particles
    for (let i = 0; i < 15; i++) {
      const particle = document.createElement('div');
      particle.classList.add('particle');
      particle.style.left = `${Math.random() * 100}%`;
      particle.style.width = `${Math.random() * 3 + 1}px`;
      particle.style.height = particle.style.width;
      particle.style.opacity = `${Math.random() * 0.7 + 0.3}`;
      particle.style.animationDuration = `${Math.random() * 10 + 10}s`;
      particle.style.animationDelay = `${Math.random() * 5}s`;
      particleContainer.appendChild(particle);
    }
  
    // Add interaction effects to form elements
    const inputs = document.querySelectorAll('input, textarea');
    inputs.forEach(input => {
      input.addEventListener('focus', function() {
        this.parentElement.classList.add('active');
      });
      
      input.addEventListener('blur', function() {
        this.parentElement.classList.remove('active');
      });
    });
  
    // Interactive button effect
    const button = document.querySelector('button');
    button.addEventListener('mouseover', function() {
      this.style.transform = 'translateY(-2px)';
    });
    
    button.addEventListener('mouseout', function() {
      this.style.transform = 'translateY(0)';
    });
    
    button.addEventListener('mousedown', function() {
      this.style.transform = 'translateY(1px)';
      
      // Add ripple effect
      const ripple = document.createElement('span');
      ripple.classList.add('ripple');
      this.appendChild(ripple);
      
      const rect = this.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height);
      ripple.style.width = ripple.style.height = `${size}px`;
      
      setTimeout(() => {
        ripple.remove();
      }, 600);
    });
    
    // Add this CSS for ripple effect
    const style = document.createElement('style');
    style.textContent = `
      .ripple {
        position: absolute;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.4);
        transform: scale(0);
        animation: ripple 0.6s linear;
      }
      
      @keyframes ripple {
        to {
          transform: scale(2);
          opacity: 0;
        }
      }
      
      .active .input-highlight {
        opacity: 1;
        animation: input-shine 1.5s infinite;
      }
    `;
    document.head.appendChild(style);
  });

//   mobile toggle 

// Mobile Navigation Toggle Code

// Add this to your JavaScript file
document.addEventListener('DOMContentLoaded', function() {
    // Function to check if device is mobile based on screen width
    function isMobile() {
        return window.innerWidth <= 768; // You can adjust this breakpoint as needed
    }

    // Function to toggle navigation visibility
    function toggleNavigationVisibility() {
        const navContainer = document.querySelector('.nav-container');
        
        if (isMobile()) {
            navContainer.style.display = 'none';
            
            // Create a mobile menu toggle button if it doesn't exist
            if (!document.querySelector('.mobile-menu-toggle')) {
                const mobileToggle = document.createElement('button');
                mobileToggle.className = 'mobile-menu-toggle';
                mobileToggle.innerHTML = '☰'; // Hamburger icon
                mobileToggle.style.position = 'fixed';
                mobileToggle.style.top = '20px';
                mobileToggle.style.right = '20px';
                mobileToggle.style.zIndex = '1000';
                mobileToggle.style.background = '#1a1a2e';
                mobileToggle.style.color = '#00ff9f';
                mobileToggle.style.border = '1px solid #00ff9f';
                mobileToggle.style.borderRadius = '5px';
                mobileToggle.style.padding = '8px 12px';
                mobileToggle.style.fontSize = '24px';
                mobileToggle.style.cursor = 'pointer';
                
                // Toggle menu visibility when clicked
                mobileToggle.addEventListener('click', function() {
                    if (navContainer.style.display === 'none' || !navContainer.style.display) {
                        navContainer.style.display = 'flex';
                        navContainer.style.flexDirection = 'column';
                        navContainer.style.position = 'fixed';
                        navContainer.style.top = '0';
                        navContainer.style.left = '0';
                        navContainer.style.right = '0';
                        navContainer.style.backgroundColor = '#1a1a2e';
                        navContainer.style.padding = '60px 20px 20px 20px';
                        navContainer.style.zIndex = '999';
                        
                        // Adjust link styles for mobile
                        const navLinks = document.querySelector('.nav-links');
                        if (navLinks) {
                            navLinks.style.flexDirection = 'column';
                            navLinks.style.alignItems = 'center';
                            navLinks.style.width = '100%';
                            
                            const links = navLinks.querySelectorAll('.nav-link');
                            links.forEach(link => {
                                link.style.margin = '10px 0';
                                link.style.fontSize = '18px';
                            });
                        }
                        
                        // Adjust GitHub link
                        const githubLink = document.querySelector('.github-link');
                        if (githubLink) {
                            githubLink.style.margin = '15px auto 0 auto';
                        }
                        
                        mobileToggle.innerHTML = '✕'; // Change to X icon
                    } else {
                        navContainer.style.display = 'none';
                        mobileToggle.innerHTML = '☰'; // Change back to hamburger
                    }
                });
                
                document.body.appendChild(mobileToggle);
            }
        } else {
            // On desktop view
            navContainer.style.display = 'flex';
            navContainer.style.flexDirection = '';
            navContainer.style.position = '';
            navContainer.style.top = '';
            navContainer.style.left = '';
            navContainer.style.right = '';
            navContainer.style.padding = '';
            navContainer.style.zIndex = '';
            
            // Remove mobile toggle button if it exists
            const mobileToggle = document.querySelector('.mobile-menu-toggle');
            if (mobileToggle) {
                mobileToggle.remove();
            }
            
            // Reset styles that might have been changed
            const navLinks = document.querySelector('.nav-links');
            if (navLinks) {
                navLinks.style.flexDirection = '';
                navLinks.style.alignItems = '';
                navLinks.style.width = '';
                
                const links = navLinks.querySelectorAll('.nav-link');
                links.forEach(link => {
                    link.style.margin = '';
                    link.style.fontSize = '';
                });
            }
            
            const githubLink = document.querySelector('.github-link');
            if (githubLink) {
                githubLink.style.margin = '';
            }
        }
    }

    // Initial check
    toggleNavigationVisibility();
    
    // Listen for window resize events
    window.addEventListener('resize', toggleNavigationVisibility);
});

// CSS to add to your stylesheet
/*
.mobile-menu-toggle {
    display: none;
}

@media (max-width: 768px) {
    .mobile-menu-toggle {
        display: block;
    }
}
*/
