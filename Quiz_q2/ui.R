##QUIZQ2##
##UI##
library(shiny)
library(ggplot2)

dataset <- diamonds

pageWithSidebar(
  
  headerPanel("Diamonds Explorer"),
  
  sidebarPanel(
    
    sliderInput('sampleSize', 'Sample Size', min=1, max=nrow(dataset),
                value=min(1000, nrow(dataset)), step=500, round=0),
    
    selectInput('x', 'X', names(dataset)),
    selectInput('y', 'Y', names(dataset), names(dataset)[[2]]),
    selectInput('color', 'Color', c('None', names(dataset))),
    
    checkboxInput('jitter', 'Jitter'),
    checkboxInput('smooth', 'Smooth'),
    
  ),
  
  mainPanel(
    plotOutput('plot')
  )
)