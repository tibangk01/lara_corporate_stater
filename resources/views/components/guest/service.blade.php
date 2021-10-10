 <section id="services" class="services">

     <div class="container" data-aos="fade-up">

         <!-- TODO: indent code, service delays, card behaviors -->
         <div class="section-title">
             <h2>{{ $section->name }}</h2>
             <h3>{{ __('Check our') }} <span>{{ $section->title }}</span></h3>
             <p>{{ $section->description }}</p>
         </div>

         <div class="row">


             @if ($items)

                 @foreach ($items as $item)

                     <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                         <div class="icon-box">
                             <div class="icon"><i
                                     class="bx {{ $item->iconableItem->icon->is_extended ? 'bxl-' : 'bx-' }}{{ $item->iconableItem->icon->class }}"></i>
                             </div>
                             <h4><a href="">{{ $item->iconableItem->title }}</a></h4>
                             <p>{{ $item->iconableItem->value }}</p>
                         </div>
                     </div>
                 @endforeach

             @endif


         </div>
 </section><!-- End Services Section -->
