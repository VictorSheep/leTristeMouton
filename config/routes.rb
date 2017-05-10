Rails.application.routes.draw do
  resources :articles
  root 'articles#home'
  get '/article/:id' => 'articles#show'
  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
end
