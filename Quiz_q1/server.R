##QUIZQ1##
#SERVER#
library(shiny)
#writing server function
shinyServer(function(input, output) {
  #referring output distPlot in ui.r as output$distPlot
  output$distPlot <- renderPlot({
    input$p
    if(input$p=='a'){
      i<-1 }
    if(input$p=='b'){
      i<-2 }
    if(input$p=='c'){
      i<-3 }
    if(input$p=='d'){
      i<-4 }
    x <- iris[, i]
    input$bins
    bins <- seq(min(x), max(x), length.out = input$bins + 1)
    #
    hist(x, breaks = bins, col = 'darkgray', border = 'white')
  })
})