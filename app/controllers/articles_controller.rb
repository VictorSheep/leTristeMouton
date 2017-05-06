class ArticlesController < ApplicationController
  def home
    @nb_articles = 9
    @nb_col = 4
    @ratio = @nb_articles / @nb_col
    @articles = Article.all
  end
end
