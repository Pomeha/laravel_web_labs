do ->

  Slideshow = (element) ->
    @el = document.querySelector(element)
    @init()
    return

  Slideshow.prototype =
    init: ->
      @wrapper = @el.querySelector('.slider-wrapper')
      @slides = @el.querySelectorAll('.slide')
      @previous = @el.querySelector('.slider-previous')
      @next = @el.querySelector('.slider-next')
      @index = 0
      @total = @slides.length
      @timer = null
      @action()
      @stopStart()
      return
    _slideTo: (slide) ->
      `var slide`
      currentSlide = @slides[slide]
      currentSlide.style.opacity = 1
      i = 0
      while i < @slides.length
        slide = @slides[i]
        if slide != currentSlide
          slide.style.opacity = 0
        i++
      return
    action: ->
      self = this
      self.timer = setInterval((->
        self.index++
        if self.index == self.slides.length
          self.index = 0
        self._slideTo self.index
        return
      ), 6000)
      return
    stopStart: ->
      self = this
      self.el.addEventListener 'mouseover', (->
        clearInterval self.timer
        self.timer = null
        return
      ), false
      self.el.addEventListener 'mouseout', (->
        self.action()
        return
      ), false
      return
  document.addEventListener 'DOMContentLoaded', ->
    slider = new Slideshow('#main-slider')
    return
  return