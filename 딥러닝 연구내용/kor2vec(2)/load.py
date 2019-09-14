from gensim.models.keyedvectors import KeyedVectors
from konlpy.tag import Twitter
import numpy as np

pos_vectors = KeyedVectors.load_word2vec_format('pos.vec', binary=False)
pos_vectors.most_similar("('남자','Noun')")
twitter = Twitter()
word = "대통령이"
pos_list = twitter.pos(word, norm=True)
word_vector = np.sum([pos_vectors.word_vec(str(pos).replace(" ", "")) for pos in pos_list], axis=0)