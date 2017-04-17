class ArticlesController < ApplicationController
  def index
    @articles = Articles
  end
end
