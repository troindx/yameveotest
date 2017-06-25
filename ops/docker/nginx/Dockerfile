FROM nginx:1.9

MAINTAINER Marc Lopez <marc5.12@outlook.com>

# Declare user
ENV USER friends

# Clean up default files
RUN useradd -u 888 $USER \
    && rm -f /etc/nginx/conf.d/*